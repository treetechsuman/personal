<?php 

namespace App\Http\Controllers\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Education\EducationRepository;


class EducationController extends Controller{
	private $educationRepo;

	public function __construct(
		EducationRepository $educationRepo
	){
		$this->educationRepo = $educationRepo;
	}

	public function index(){
		$educations = $this->educationRepo->getAllEducation();
		return view('backend.education.index',compact('educations'));
	}

	public function create(){
		return view('backend.education.create');
	}

	public function store(Request $request){
		$this->educationRepo->createEducation($request->all());
		return redirect('admin/education');
	}

	public function show(){
		return view('backend.education.show');
	}

	public function edit($id){
		$education = $this->educationRepo->getEducationById($id);
		return view('backend.education.edit',compact('education'));
	}

	public function update($id ,Request $request){
		$this->educationRepo->updateEducation($id,$request->all());
		return redirect('admin/education');
	}

	public function delete($id){
		$this->educationRepo->deleteEducation($id);
		return redirect('admin/education');
	}

}