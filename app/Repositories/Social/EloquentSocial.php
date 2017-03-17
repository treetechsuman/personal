<?php 
namespace App\Repositories\Social;

use App\Model\Social;

class EloquentSocial implements SocialRepository{
	private $social;

	public function __construct(Social $social){
		$this->social = $social;
	}
	public function getAllSocial(){
		return $this->social->all()->sortBy('display_order');
	}

	public function getSocialById($id){
		return $this->social->findorfail($id);
	}

	public function createSocial(array $attributes){
		return $this->social->create($attributes);
	}

	public function updateSocial($id,array $attributes){
		return $this->social->findorfail($id)->update($attributes);
	}

	public function deleteSocial($id){
		return $this->social->findorfail($id)->delete();
	}

}