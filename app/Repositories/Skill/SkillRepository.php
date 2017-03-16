<?php 
namespace App\Repositories\Skill;

interface SkillRepository {

	function getAllSkill();

	function getSkillById($id);

	function createSkill(array $attributes);

	function updateSkill($id, array $attributes);

	function deleteSkill($id);

}
