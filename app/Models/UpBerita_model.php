<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class UpBerita_model extends Model{
	protected $table = 'news';
	protected $primaryKey = 'id';
	public $timestamps = true;
	protected $fillable = ['title','thumbnail','text'];
}