<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model{
	protected $table='experiences';
	protected $fillable=[
				'id',
				'office',
				'post',
				'description',
				'from',
				'to',
				'display_order',
				'status',
			];
	protected $hidden=[
	];
}