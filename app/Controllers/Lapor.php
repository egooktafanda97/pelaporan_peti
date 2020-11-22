<?php
namespace App\Controllers;

use App\Models\Crud_Model;
use CodeIgniter\Controller;
use App\Config\Services;
class Lapor extends Controller{
	protected $requst = Services::request();
	// public function __construct(RequestInterface $request){
	// 	$this->requst = $requst;
	// }
	public function index(){	
		// var_dump(Crud_Model::all()->getResultArray());
		// var_dump(Crud_Model::all());
		// die();
		$data = [
			'layout' => 'lapor',
			'ajax'   => 'ajax_lapor'
		];
		echo view('init/route', $data);
	}
	public function data_diri(){
		var_dump($this->requst);
		// echo "string";
	}
}