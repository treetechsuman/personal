<?php 
namespace App\Repositories\Message;

use App\Model\Message;

class EloquentMessage implements MessageRepository{
	private $message;

	public function __construct(Message $message){
		$this->message = $message;
	}
	public function getAllMessage(){
		return $this->message->all();
	}

	public function getMessageById($id){
		return $this->message->findorfail($id);
	}

	public function createMessage(array $attributes){
		return $this->message->create($attributes);
	}

	public function updateMessage($id,array $attributes){
		return $this->message->findorfail($id)->update($attributes);
	}

	public function deleteMessage($id){
		return $this->message->findorfail($id)->delete();
	}

}