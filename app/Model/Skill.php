<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model{
	protected $table='skills';
	protected $fillable=[
				'id',
				'title',
				'value',
				'type',
				'display_order',
				'status',
			];
	protected $hidden=[
	];
}