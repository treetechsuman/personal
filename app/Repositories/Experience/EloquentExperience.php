<?php 
namespace App\Repositories\Experience;

use App\Model\Experience;

class EloquentExperience implements ExperienceRepository{
	private $experience;

	public function __construct(Experience $experience){
		$this->experience = $experience;
	}
	public function getAllExperience(){
		return $this->experience->all()->sortBy('display_order');
	}

	public function getExperienceById($id){
		return $this->experience->findorfail($id);
	}

	public function createExperience(array $attributes){
		return $this->experience->create($attributes);
	}

	public function updateExperience($id,array $attributes){
		return $this->experience->findorfail($id)->update($attributes);
	}

	public function deleteExperience($id){
		return $this->experience->findorfail($id)->delete();
	}

}