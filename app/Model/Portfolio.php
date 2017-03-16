<?php 
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model{
	protected $table='portfolios';
	protected $fillable=[
				'id',
				'title',
				'description',
				'image',
				'url',
				'status',
			];
	protected $hidden=[
	];
}