<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Tb_user_Model;
use App\Models\Tb_lapor_Model;
use App\Models\UpBerita_model;
use App\Models\UpProfil_Model;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\Libraries\Mailer;

// use App\Libraries\LibMpdf;
use \Mpdf\Mpdf;
use App\Libraries\UnsafeCrypto;

class Admin extends BaseController{
	protected $db;
	protected $session;
	public function __construct(){
		service('eloquent');
		$this->db = \Config\Database::connect();
		$this->session = \Config\Services::session();
		
	}
	public function login(){
		$data = [
			'layout' => 'login'
		];
		echo view('admin/base/login', $data);
	}
	public function prosesLogin(){
		$data = $this->request->getPost();

		$data_ = [
			"username" => $data['username'],
			"password" => md5($data['password'])
		];

		$login = $this->db->table('admin')
		->where(['username'=>$data_['username'],'password'=>$data_['password']])
		->get()
		->getResultArray();

		if(count($login) > 0 && count($login) < 2){
			$this->session->set('log',$login);
			return redirect()->route('container');
		}
	}
	public function logout(){
		session_destroy();
		return redirect()->route('login');
	}
	// public function getTest(){
	// 	// session_destroy();
	// 	var_dump(empty($this->session->get('log')));
	// }
	public function index(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.status',"pending")
		->get();
		$data = [
			'layout' => 'home',
			'new'	 => $ex->getResultArray()
		];
		echo view('init/__root', $data);
	}
	public function laporan_ditolak(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.status',"Tolak")
		->get();
		$data = [
			'layout' => 'lap_tolak',
			'new'	 => $ex->getResultArray()
		];
		echo view('init/__root', $data);
	}
	public function laporan_terima(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.status',"Penyelidikan")
		->get();
		$data = [
			'layout' => 'lap_penyelidikan',
			'new'	 => $ex->getResultArray()
		];
		echo view('init/__root', $data);
	}
	public function laporan_hasil(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.status',"Selesai")
		->get();
		$data = [
			'layout' => 'lap_selesai',
			'new'	 => $ex->getResultArray()
		];
		echo view('init/__root', $data);
	}
	public function preview($user_kode){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}

		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.kode_user', $user_kode)
		->get();
		$data = [
			'layout' => 'preview',
			'ajax'	 => 'adm_ajx_preview',
			'new'	 => $ex->getRowArray()
		];
		
		echo view('init/__root', $data);
	}
	public function upStatus_next_proses(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$data = $this->request->getPost();
		$send = new Mailer();
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.kode_user', $data['kode'])
		->get()->getRowArray();

		// var_dump($ex['email']);

		if($data['status'] == 'Tolak'){
			$send->send($ex['email'],"Laporan Anda ".$data['status'],$data['pesan']);
			$data_up = [
				'status' => $data['status'],
				'pesan'	 => $data['pesan'] 
			];
		}else{
			$send->send($ex['email'],"Laporan Anda ".$data['status'],"laporan anda akan segera kami selidiki, Lihat laporan anda di : <a href='".base_url('LaporanUser')."/".acak($ex['user_kode'],true)."'>".base_url('LaporanUser')."/".UnsafeCrypto::encrypt($ex['user_kode'],true)."</a>");
			$data_up = [
				'status' => $data['status'],
				'pesan'	 => "Lpoaran Di Selidiki"
			];
		}


		$exe = Tb_lapor_Model::wherekodeUser($data['kode'])->update($data_up);
		if($exe){
			return redirect()->to('/container');
		}else{
			return redirect()->to('/previews/'.$data['kode']);
		}
	}

	public function hasil(){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$data = $this->request->getPost();
		$send = new Mailer();
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.kode_user', $data['kode'])
		->get()->getRowArray();
		$data_up = [
			'status' => $data['status'],
			'pesan'	 => $data['pesan']
		];

		$exe = Tb_lapor_Model::wherekodeUser($data['kode'])->update($data_up);
		if($exe){
			$send->send($ex['email'],"Status Kasus Laporan Anda ".$data['status'],$data['pesan']);
			return redirect()->to('/postBerita');
		}else{
			return redirect()->to('/previews/'.$data['kode']);
		}
	}

	public function postBerita(){
		$data = [
			'layout' => 'berita',
			'ajax'	 => 'adm_ajx_berita',
			'berita' => UpBerita_model::all()
		];
		echo view('init/__root', $data);
	}

	public function cekBerita(){
		$id = $this->request->getPost('id');
		$data = UpBerita_model::whereid($id)->first();
		return json_encode($data);
	}

	public function ajax_up_images_news(){
		$file = $this->request->getFile('file');
		$newName = $file->getRandomName();
		$up = $file->move('./public/imgs', $newName);
		return json_encode(["img"=>$newName]);
	}

	public function up_berita(){
		$file = $this->request->getFile('thumbnail');
		if(!empty($file)){
			$data = $this->request->getPost();
			$newName = $file->getRandomName();
			$data = [
				'title'		=> $data['title'],
				'thumbnail'	=> $newName,
				'text'		=> $data['text']
			];
			if(!empty($data['title']) && !empty($file) && !empty($data['text'])){
				$up = new UpBerita_model($data);
				if($up->save()){
					$up = $file->move('./public/thm', $newName);
					echo true;
				}else{
					echo false;
				}
			}else{
				echo false;
			}
		}else{
			echo false;
		}	
	}
	public function ed_berita(){
		$file = $this->request->getFile('thumbnail');
		if(empty($file)){
			$newName = UpBerita_model::whereid($this->request->getPost('id'))->first()->thumbnail;
		}else{
			$newName = $file->getRandomName();
			$file->move('./public/thm', $newName);
		}
		$data = $this->request->getPost();
		$data = [
			'title'		=> $data['title'],
			'thumbnail'	=> $newName,
			'text'		=> $data['text']
		];
		if(!empty($data['title']) && !empty($data['text'])){
			$up = UpBerita_model::whereid($this->request->getPost('id'))->update($data);
			if($up){
				echo true;
			}else{
				echo false;
			}
		}else{
			echo false;
		}
	}

	public function profil(){
		$data = [
			'layout' => 'profil',
			'ajax'	 => 'adm_ajx_profil',
			'q' 	 => UpProfil_Model::query("SELECT*FROM profil")->first()
		];
		echo view('init/__root', $data);
	}
	public function upProfil(){
		$file = $this->request->getFile('sOrg');
		$data_ = $this->request->getPost();
		if(!empty($file)){
			$newName = $file->getRandomName();
			$file->move('./public/uploads', $newName);
			$data = [
				'visi'					=> $data_['editor1'],
				'misi'					=> $data_['editor2'],
				'sejarah'				=> $data_['editor3'],	
				'struktur_organisasi'	=> $newName				
			];
			$ex = UpProfil_Model::query()->update($data);
			return redirect()->route('admprofil');
		}else{
			$data = [
				'visi'					=> $data_['editor1'],
				'misi'					=> $data_['editor2'],
				'sejarah'				=> $data_['editor3'],					
			];
			$ex = UpProfil_Model::query()->update($data);
			// return redirect()->route('admprofil');
		}
	}
	public function laporan($status){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.status',$status)
		->get();
		$data = [
			'layout' => 'laporan',
			'new'	 => $ex->getResultArray()
		];
		echo view('init/__root', $data);
	}
	public function prev($user_kode){
		if(empty($this->session->get('log'))){
			return redirect()->route('login');
		}
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.kode_user', $user_kode)
		->get();
		$data = [
			'layout' => 'prev',
			'ajax'	 => 'adm_ajx_preview',
			'new'	 => $ex->getRowArray()
		];
		
		echo view('init/__root', $data);
	}
	public function search_(){
		$data = $this->request->getPost();
		if(empty($data)){
			return redirect()->to('adm_laporan/pending');
			// echo "string";
		}else{
			$post = Tb_lapor_Model::whereYear('created_at', '=', $data['year'])
			->whereMonth('created_at', '=', $data['month'])
			->wherestatus($data['status'])
			->get();
			$data = [
				'layout' => 'lap_print',
				'new'	 => $post,
				'export' => $data
			];
			echo view('init/__root', $data);
		}
		
	}
	public function printAll($one,$thu,$tre){
		$post = Tb_lapor_Model::whereYear('created_at', '=', $thu)
		->whereMonth('created_at', '=', $tre)
		->wherestatus($one)
		->get();
		$data = [
			'ex'     => ["status"=>$one,"bulan"=>$tre,"tahun"=>$thu],
			'lap'	 => $post,
			'img'	 => ROOTPATH.'public/admin/images/face.jpg'
		];
		$v = view('admin/base/laprint', $data);
		$mpdf = new Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'margin_left' => 10, 'margin_top' => 10, 'margin_right' => 10, 'margin_bottom' => 1, 'orientation' => 'P' ]);

		$mpdf->showImageErrors = true;
		$mpdf->debug = true; 
		$mpdf->WriteHTML($v);
		return redirect()->to($mpdf->Output('filename.pdf', 'I'));

		// $imagedata = file_get_contents(base_url('admin').'/images/face.jpg');
		// $base64 = base64_encode($imagedata);
		// echo $base64;
	}

	public function print_laporn_pelapor($user_kode){
		$ex 	 = $this->db->table('user')
		->select('*,user.kode as user_kode')
		->join('lapor','lapor.kode_user = user.kode')
		->where('lapor.kode_user', $user_kode)
		->get();
		$data = [
			'query' => $ex->getRowArray()
		];
		$v = view("admin/base/pilres_reqies",$data);
		$mpdf = new Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'margin_left' => 10, 'margin_top' => 10, 'margin_right' => 10, 'margin_bottom' => 1, 'orientation' => 'P' ]);
		$mpdf->WriteHTML($v);
		return redirect()->to($mpdf->Output('filename.pdf', 'I'));
		// echo base_url('assets').'/css/bootstrap.css';
	}


	public function deleteLap($kode1,$kode2,$page){

		$ex = Tb_user_Model::wherekode($kode1)->delete();
		if($ex){
			$ex2 = Tb_lapor_Model::wherekode($kode2)->delete();
			if($ex2){
				return redirect()->to('/'.$page);
			}
		}else{
			echo "gagal";
		}
	}
	public function deleteBerita($id){
		$ex = UpBerita_model::whereid($id)->delete();
		if($ex){
			return redirect()->to('/postBerita');	
		}else{
			return redirect()->to('/postBerita');
		}
	}
}

