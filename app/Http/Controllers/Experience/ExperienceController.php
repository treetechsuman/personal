<?php 

namespace App\Http\Controllers\Experience;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Experience\ExperienceRepository;


class ExperienceController extends Controller{
	private $experienceRepo;

	public function __construct(
		ExperienceRepository $experienceRepo
	){
		$this->experienceRepo = $experienceRepo;
	}

	public function index(){
		$experiences = $this->experienceRepo->getAllExperience();
		return view('backend.experience.index',compact('experiences'));
	}

	public function create(){
		return view('backend.experience.create');
	}

	public function store(Request $request){
		$this->experienceRepo->createExperience($request->all());
		return redirect('admin/experience');
	}

	public function show(){
		return view('backend.experience.show');
	}

	public function edit($id){
		$experience = $this->experienceRepo->getExperienceById($id);
		return view('backend.experience.edit',compact('experience'));
	}

	public function update($id ,Request $request){
		$this->experienceRepo->updateExperience($id,$request->all());
		return redirect('admin/experience');
	}

	public function delete($id){
		$this->experienceRepo->deleteExperience($id);
		return redirect('admin/experience');
	}

}