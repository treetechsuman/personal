<?php 
namespace App\Repositories\Message;

interface MessageRepository {

	function getAllMessage();

	function getMessageById($id);

	function createMessage(array $attributes);

	function updateMessage($id, array $attributes);

	function deleteMessage($id);

}
