<?php 
namespace App\Repositories\Slide;

interface SlideRepository {

	function getAllSlide();

	function getSlideById($id);

	function createSlide(array $attributes);

	function updateSlide($id, array $attributes);

	function deleteSlide($id);

}
