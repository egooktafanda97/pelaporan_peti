<?php
namespace App\Controllers;
use App\Models\Tb_user_Model;
use App\Models\Tb_lapor_Model;
use App\Libraries\UnsafeCrypto;

use App\Models\UpBerita_model;
use App\Models\UpProfil_Model;

class User_controller extends BaseController{
	protected $session;
	public function __construct(){
		service('eloquent');
		$this->session = \Config\Services::session();
	}

	public function index(){	
		$data = [
			'layout' => 'home',
			'berita' => UpBerita_model::orderBy('id', 'DESC')->get()

		];
		echo view('init/route', $data);
	}
	public function laporan(){
		$data = [
			'layout' => 'lapor',
			'ajax'   => 'ajax_lapor'
		];
		echo view('init/route', $data);
	}
	public function LaporanUser($kode){
		$enc =susun($kode);
	}
	public function save_data_diri(){
		// var_dump(Tb_user_Model::all());
		$data = $this->request->getPost();
		if(empty($this->session->get('user')['kode'])){
			$kode = ["kode"=>random(10)];
			$data = $kode+$data;
			$exe = new Tb_user_Model($data);
			if($exe->save()){
				$this->session->set('user',$data);
				echo true;
			}else{
				echo false;
			}
		}else{
			$exe = Tb_user_Model::wherekode($this->session->get('user')['kode'])->update($data);
			if($exe){
				$kode = ["kode"=>$this->session->get('user')['kode']];
				$data = $kode+$data;
				$this->session->set('user',$data);
				echo true;
			}else{
				echo false;
			}
		}
		echo json_encode(["respon"=>empty($this->session->get('user')['kode'])]);
	}

	public function dataSesion(){
		if(!empty($this->session->get('user'))){
			$cekDb = Tb_user_Model::wherekode($this->session->get('user')['kode'])->get();
			if(count($cekDb) > 0 && count($cekDb) < 2){
				$json = json_encode($this->session->get('user'));
				echo $json;
			}else{
				$this->dataSesionDestory();
			}
		}else{
			echo json_encode(["status"=>false]);
		}
		// var_dump($this->session->get('user'));
		
	}
	public function dataSesionDestory(){
		$this->session->remove('user');
	}

	public function upload_data(){
		$file = $this->request->getFile('file');
		$data = $this->request->getPost();
		$data_ = $this->request->getPost();
		$newName = $file->getRandomName();
		$up = $file->move('./public/uploads', $newName);

		$tmh = ["kode_user" => $this->session->get('user')['kode']];
		$bukti = ["bukti" => $newName];
		$lokasi = ["lokasi"=>$data['lokasi']];
		unset($data['lokasi']);
		unset($data['desc']);

		$data = ["kode"=>random(10)]+$tmh+$data+$bukti+$lokasi+["deskripsi" => $data_['desc']]+["status"=>"pending"];

		$exe = new Tb_lapor_Model($data);
		if($exe->save()){
			$this->session->set('report',$data);
			return json_encode(true);
		}else{
			return json_encode(false);
		}
	}
	public function dataSesionLapor(){
		$json = json_encode($this->session->get('report'));
		echo $json;
	}
	public function edit_data_lap(){
		$file = $this->request->getFile('file');
		$data = $this->request->getPost();
		$data_ = $this->request->getPost();
		if(!empty($file)){
			$newName = $file->getRandomName();
			$up = $file->move('./public/uploads', $newName);
			$tmh = ["kode_user" => $this->session->get('user')['kode']];
			$bukti = ["bukti" => $newName];
			$lokasi = ["lokasi"=>$data['lokasi']];
			unset($data['lokasi']);
			unset($data['desc']);
			$data = $tmh+$data+$bukti+$lokasi+["deskripsi" => $data_ ['desc']]+["status"=>"pending"];
		}else{
			$tmh = ["kode_user" => $this->session->get('user')['kode']];
			$lokasi = ["lokasi"=>$data['lokasi']];
			unset($data['lokasi']);
			unset($data['file']);
			unset($data['desc']);
			$bukti = ["bukti"=>Tb_lapor_Model::wherekode($this->session->get('report')['kode'])->first()->bukti];
			$data = $tmh+$data+$lokasi+["status"=>"pending"];
		}
		$check = Tb_lapor_Model::wherekode($this->session->get('report')['kode'])->first()->status;
		if($check == 'pending'){
			$exe = Tb_lapor_Model::wherekode($this->session->get('report')['kode'])->update($data);
			if($exe){
				$kode = ["kode"=>$this->session->get('report')['kode']];
				$data = $kode+$tmh+$data+$bukti+$lokasi+["deskripsi" => $data_ ['desc']]+["status"=>"pending"];
				$this->session->set('report',$data);
				return json_encode(true);
			}else{
				return json_encode(false);
			}
		}else{
			return json_encode(false);
		}
		
	}

	public function V_berita(){
		$data = [
			'layout' => 'berita',
			'all' 	 => UpBerita_model::orderBy('id', 'DESC')->get()
		];
		echo view('init/route', $data);
	}
	public function view_berita($id){
		$data = [
			'layout'  => 'v_berita',
			'v_berita'=> UpBerita_model::whereid($id)->first()
		];
		echo view('init/route', $data);
	}

	public function ec(){
	}


	public function profile(){
		$data = [
			'layout'  => 'profil',
			'profil'  => UpProfil_Model::query()->first()
		];
		echo view('init/route', $data);
	}
	public function kontak(){
		$data = [
			'layout'  => 'kontak'
		];
		echo view('init/route', $data);
	}

}