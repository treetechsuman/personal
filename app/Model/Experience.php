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
				'status',
			];
	protected $hidden=[
	];
}