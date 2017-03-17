<?php 

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Social\SocialRepository;


class SocialController extends Controller{
	private $socialRepo;

	public function __construct(
		SocialRepository $socialRepo
	){
		$this->socialRepo = $socialRepo;
	}

	public function index(){
		$socials = $this->socialRepo->getAllSocial();
		return view('backend.social.index',compact('socials'));
	}

	public function create(){
		return view('backend.social.create');
	}

	public function store(Request $request){
		$this->socialRepo->createSocial($request->all());
		return redirect('admin/social');
	}

	public function show(){
		return view('backend.social.show');
	}

	public function edit($id){
		$social = $this->socialRepo->getSocialById($id);
		return view('backend.social.edit',compact('social'));
	}

	public function update($id ,Request $request){
		$this->socialRepo->updateSocial($id,$request->all());
		return redirect('admin/social');
	}

	public function delete($id){
		$this->socialRepo->deleteSocial($id);
		return redirect('admin/social');
	}

}