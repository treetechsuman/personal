<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Education extends Model{
	protected $table='educations';
	protected $fillable=[
				'id',
				'institute',
				'programm',
				'university',
				'start',
				'end',
				'description',
				'display_order',
				'status',
			];
	protected $hidden=[
	];
}