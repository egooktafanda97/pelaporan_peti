<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Tb_lapor_Model extends Model{
	protected $table = 'lapor';
	protected $primaryKey = 'kode';
	protected $fillable = ['kode','kode_user','masalah','terduga','bukti','lokasi','deskripsi','status'];

}