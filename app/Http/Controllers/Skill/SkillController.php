<?php 

namespace App\Http\Controllers\Skill;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Skill\SkillRepository;


class SkillController extends Controller{
	private $skillRepo;

	public function __construct(
		SkillRepository $skillRepo
	){
		$this->skillRepo = $skillRepo;
	}

	public function index(){
		$skills = $this->skillRepo->getAllSkill();
		return view('backend.skill.index',compact('skills'));
	}

	public function create(){
		return view('backend.skill.create');
	}

	public function store(Request $request){
		$this->skillRepo->createSkill($request->all());
		return redirect('admin/skill');
	}

	public function show(){
		return view('backend.skill.show');
	}

	public function edit($id){
		$skill = $this->skillRepo->getSkillById($id);
		return view('backend.skill.edit',compact('skill'));
	}

	public function update($id ,Request $request){
		$this->skillRepo->updateSkill($id,$request->all());
		return redirect('admin/skill');
	}

	public function delete($id){
		$this->skillRepo->deleteSkill($id);
		return redirect('admin/skill');
	}

}