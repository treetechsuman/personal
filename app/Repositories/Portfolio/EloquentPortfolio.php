<?php 
namespace App\Repositories\Portfolio;

use App\Model\Portfolio;
use Image;

class EloquentPortfolio implements PortfolioRepository{
	private $portfolio;

	public function __construct(Portfolio $portfolio){
		$this->portfolio = $portfolio;
	}
	public function getAllPortfolio(){
		return $this->portfolio->all()->sortBy('display_order');
	}

	public function getPortfolioById($id){
		return $this->portfolio->findorfail($id);
	}

	public function createPortfolio(array $attributes){
		foreach($attributes['image'] as $file){
			$path = $this->uploadImage($file);
			if($path){
				$data=array();
				$data = $attributes;
				$data['image']=$path;
				$this->portfolio->create($data);
			}			
		}
		return true;
	}

	public function updatePortfolio($id,array $attributes){
		//return $this->portfolio->findorfail($id)->update($attributes);
		if(array_key_exists('image', $attributes)){
			//return 'image exixts';
			//delete old image------
			$portfolio= $this->portfolio->findorfail($id);
			unlink($portfolio['image']);
			foreach($attributes['image'] as $file){
				$path = $this->uploadImage($file);
				if($path){
					$data=array();
					$data = $attributes;
					$data['image']=$path;
					$this->portfolio->findorfail($id)->update($data);
				}			
			}
			return true;
		}else{
			return $this->portfolio->findorfail($id)->update($attributes);
		}
		
	}

	public function deletePortfolio($id){
		//return $this->portfolio->findorfail($id)->delete();
		$protfolio = $this->portfolio->findorfail($id);
		//now delete file
		//return $image; 
		if(unlink($protfolio['image'])){
			return $this->portfolio->findorfail($id)->delete();
			return 'succes';
		}
		//return $this->product_image->findorfail($id)->delete();
	}
	private function uploadImage($file){
		if($file){
			$extension = $file->getClientOriginalExtension();
			$filename= md5(microtime()).'.'.$extension;
			$destinationPath= 'uploads/image/portfolio/';
			$file->move($destinationPath,$filename);
			Image::make($destinationPath.$filename)
                ->resize( 1020, 592 )//note width x height		
                /*->text('Suman',100,100,function($font) {
								    $font->size(200);
								    $font->color(array(255, 255, 255, 0.5));
								    $font->align('center');
								    $font->valign('top');
								    $font->angle(45);
								})*/
                ->save($destinationPath.$filename);    	
    	}
    	return $destinationPath.$filename;
	}

}