<?php 

namespace App\Http\Controllers\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Message\MessageRepository;
use Session;


class MessageController extends Controller{
	private $messageRepo;

	public function __construct(
		MessageRepository $messageRepo
	){
		$this->messageRepo = $messageRepo;
	}

	public function index(){
		$messages = $this->messageRepo->getAllMessage();
		return view('backend.message.index',compact('messages'));
	}

	public function create(){
		return view('backend.message.create');
	}

	public function store(Request $request){
		$this->messageRepo->createMessage($request->all());
		Session::flash('success','Thank you for your message');
		//return redirect('admin/message');
		return back();
	}

	public function show(){
		return view('backend.message.show');
	}

	public function edit($id){
		$message = $this->messageRepo->getMessageById($id);
		return view('backend.message.edit',compact('message'));
	}

	public function update($id ,Request $request){
		$this->messageRepo->updateMessage($id,$request->all());
		return redirect('admin/message');
	}

	public function delete($id){
		$this->messageRepo->deleteMessage($id);
		return redirect('admin/message');
	}

}