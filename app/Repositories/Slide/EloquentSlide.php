<?php 
namespace App\Repositories\Slide;

use App\Model\Slide;

class EloquentSlide implements SlideRepository{
	private $slide;

	public function __construct(Slide $slide){
		$this->slide = $slide;
	}
	public function getAllSlide(){
		return $this->slide->all()->sortBy('display_order');
	}

	public function getSlideById($id){
		return $this->slide->findorfail($id);
	}

	public function createSlide(array $attributes){
		return $this->slide->create($attributes);
	}

	public function updateSlide($id,array $attributes){
		return $this->slide->findorfail($id)->update($attributes);
	}

	public function deleteSlide($id){
		return $this->slide->findorfail($id)->delete();
	}

}