<?php 
namespace App\Repositories\Skill;

use App\Model\Skill;

class EloquentSkill implements SkillRepository{
	private $skill;

	public function __construct(Skill $skill){
		$this->skill = $skill;
	}
	public function getAllSkill(){
		return $this->skill->all()->sortBy('display_order');
	}

	public function getSkillById($id){
		return $this->skill->findorfail($id);
	}

	public function createSkill(array $attributes){
		return $this->skill->create($attributes);
	}

	public function updateSkill($id,array $attributes){
		return $this->skill->findorfail($id)->update($attributes);
	}

	public function deleteSkill($id){
		return $this->skill->findorfail($id)->delete();
	}

	public function getSkillByType($type){
		return $this->skill->where('type',$type)->orderBy('display_order','asc')->get();
	}

}