<?php 

namespace App\Http\Controllers\Slide;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Slide\SlideRepository;


class SlideController extends Controller{
	private $slideRepo;

	public function __construct(
		SlideRepository $slideRepo
	){
		$this->slideRepo = $slideRepo;
	}

	public function index(){
		$slides = $this->slideRepo->getAllSlide();
		return view('backend.slide.index',compact('slides'));
	}

	public function create(){
		return view('backend.slide.create');
	}

	public function store(Request $request){
		$this->slideRepo->createSlide($request->all());
		return redirect('admin/slide');
	}

	public function show(){
		return view('backend.slide.show');
	}

	public function edit($id){
		$slide = $this->slideRepo->getSlideById($id);
		return view('backend.slide.edit',compact('slide'));
	}

	public function update($id ,Request $request){
		$this->slideRepo->updateSlide($id,$request->all());
		return redirect('admin/slide');
	}

	public function delete($id){
		$this->slideRepo->deleteSlide($id);
		return redirect('admin/slide');
	}

}