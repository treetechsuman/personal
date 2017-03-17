<?php 
namespace App\Repositories\Social;

interface SocialRepository {

	function getAllSocial();

	function getSocialById($id);

	function createSocial(array $attributes);

	function updateSocial($id, array $attributes);

	function deleteSocial($id);

}
