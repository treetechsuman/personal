<?php 
namespace App\Repositories\Portfolio;

use App\Model\Portfolio;

class EloquentPortfolio implements PortfolioRepository{
	private $portfolio;

	public function __construct(Portfolio $portfolio){
		$this->portfolio = $portfolio;
	}
	public function getAllPortfolio(){
		return $this->portfolio->all();
	}

	public function getPortfolioById($id){
		return $this->portfolio->findorfail($id);
	}

	public function createPortfolio(array $attributes){
		return $this->portfolio->create($attributes);
	}

	public function updatePortfolio($id,array $attributes){
		return $this->portfolio->findorfail($id)->update($attributes);
	}

	public function deletePortfolio($id){
		return $this->portfolio->findorfail($id)->delete();
	}

}