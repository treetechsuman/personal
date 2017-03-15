<?php 
namespace App\Repositories\Education;

use App\Model\Education;

class EloquentEducation implements EducationRepository{
	private $education;

	public function __construct(Education $education){
		$this->education = $education;
	}
	public function getAllEducation(){
		return $this->education->all();
	}

	public function getEducationById($id){
		return $this->education->findorfail($id);
	}

	public function createEducation(array $attributes){
		return $this->education->create($attributes);
	}

	public function updateEducation($id,array $attributes){
		return $this->education->findorfail($id)->update($attributes);
	}

	public function deleteEducation($id){
		return $this->education->findorfail($id)->delete();
	}

}