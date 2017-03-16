<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class About extends Model{
	protected $table='abouts';
	protected $fillable=[
				'id',
				'name',
				'gender',
				'email',
				'mobile',
				'address',
				'url',
				'description',
				'job_title',
			];
	protected $hidden=[
	];
}