<?php 
namespace App\Repositories\Experience;

interface ExperienceRepository {

	function getAllExperience();

	function getExperienceById($id);

	function createExperience(array $attributes);

	function updateExperience($id, array $attributes);

	function deleteExperience($id);

}
