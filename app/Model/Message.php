<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model{
	protected $table='messages';
	protected $fillable=[
				'id',
				'name',
				'email',
				'phone',
				'message',
				'status',
			];
	protected $hidden=[
	];
}