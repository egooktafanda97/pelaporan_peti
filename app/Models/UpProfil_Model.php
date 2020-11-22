<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class UpProfil_Model extends Model{
	protected $table = 'profil';
	public $timestamps = false;
	protected $fillable = ['visi','misi','sejarah','struktur_organisasi'];
}