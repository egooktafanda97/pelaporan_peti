<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Tb_user_Model extends Model{
	protected $table = 'user';
	protected $primaryKey = 'kode';
	public $timestamps = false;
	protected $fillable = ['kode','nik','nama','tempat_lahir','tanggal_lahir','pekerjaan','kebangsaan','agama','alamat','email','no_hp'];

}