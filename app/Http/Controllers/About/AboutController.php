<?php 

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\About\AboutRepository;


class AboutController extends Controller{
	private $aboutRepo;

	public function __construct(
		AboutRepository $aboutRepo
	){
		$this->aboutRepo = $aboutRepo;
	}

	public function index(){
		$abouts = $this->aboutRepo->getAllAbout();
		return view('backend.about.index',compact('abouts'));
	}

	public function create(){
		return view('backend.about.create');
	}

	public function store(Request $request){
		$this->aboutRepo->createAbout($request->all());
		return redirect('admin/about');
	}

	public function show(){
		return view('backend.about.show');
	}

	public function edit($id){
		$about = $this->aboutRepo->getAboutById($id);
		return view('backend.about.edit',compact('about'));
	}

	public function update($id ,Request $request){
		$this->aboutRepo->updateAbout($id,$request->all());
		return redirect('admin/about');
	}

	public function delete($id){
		$this->aboutRepo->deleteAbout($id);
		return redirect('admin/about');
	}

}