<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Social extends Model{
	protected $table='socials';
	protected $fillable=[
				'id',
				'icon',
				'link',
				'display_order',
				'status',
			];
	protected $hidden=[
	];
}