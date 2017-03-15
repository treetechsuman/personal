<?php 
namespace App\Repositories\Education;

interface EducationRepository {

	function getAllEducation();

	function getEducationById($id);

	function createEducation(array $attributes);

	function updateEducation($id, array $attributes);

	function deleteEducation($id);

}
