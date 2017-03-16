<?php 

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Portfolio\PortfolioRepository;


class PortfolioController extends Controller{
	private $portfolioRepo;

	public function __construct(
		PortfolioRepository $portfolioRepo
	){
		$this->portfolioRepo = $portfolioRepo;
	}

	public function index(){
		$portfolios = $this->portfolioRepo->getAllPortfolio();
		return view('backend.portfolio.index',compact('portfolios'));
	}

	public function create(){
		return view('backend.portfolio.create');
	}

	public function store(Request $request){
		$this->portfolioRepo->createPortfolio($request->all());
		return redirect('admin/portfolio');
	}

	public function show(){
		return view('backend.portfolio.show');
	}

	public function edit($id){
		$portfolio = $this->portfolioRepo->getPortfolioById($id);
		return view('backend.portfolio.edit',compact('portfolio'));
	}

	public function update($id ,Request $request){
		$this->portfolioRepo->updatePortfolio($id,$request->all());
		return redirect('admin/portfolio');
	}

	public function delete($id){
		$this->portfolioRepo->deletePortfolio($id);
		return redirect('admin/portfolio');
	}

}