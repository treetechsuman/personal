<?php 
namespace App\Repositories\About;

interface AboutRepository {

	function getAllAbout();

	function getAboutById($id);

	function createAbout(array $attributes);

	function updateAbout($id, array $attributes);

	function deleteAbout($id);

}
