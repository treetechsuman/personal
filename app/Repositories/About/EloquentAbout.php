<?php 
namespace App\Repositories\About;

use App\Model\About;

class EloquentAbout implements AboutRepository{
	private $about;

	public function __construct(About $about){
		$this->about = $about;
	}
	public function getAllAbout(){
		return $this->about->all();
	}
	public function getAbout(){
		return $this->about->first();
	}

	public function getAboutById($id){
		return $this->about->findorfail($id);
	}

	public function createAbout(array $attributes){
		return $this->about->create($attributes);
	}

	public function updateAbout($id,array $attributes){
		return $this->about->findorfail($id)->update($attributes);
	}

	public function deleteAbout($id){
		return $this->about->findorfail($id)->delete();
	}

}