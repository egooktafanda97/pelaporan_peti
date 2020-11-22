<?php 
namespace App\Controllers;
use App\Models\Crud_Model;
use Codeignither\HTTP\RequestInterface;
use App\Models\Tb_user_Model;
use App\Models\Tb_lapor_Model;
use App\Libraries\UnsafeCrypto;

use App\Models\UpBerita_model;
class Home extends BaseController{
	protected $request;
	public function __construct(){
		service('eloquent');
		$this->session = \Config\Services::session();
	}
	
	public function index(){
		$data = [
			'layout' => 'home',
			'ajax'   => 'ajax_lapor',
			'berita' => UpBerita_model::orderBy('id', 'DESC')->get()
		];
		echo view('init/route', $data);
	}
	public function data_diri(RequestInterface $request){
		var_dump($request);
		// echo "string";
	}

	//--------------------------------------------------------------------

}
