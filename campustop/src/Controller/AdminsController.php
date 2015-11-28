<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class AdminsController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->Auth->allow('add');
		$this->viewBuilder()->layout('adminMain');
	}
	public function index()
	{
		$this->set('users', $this->Users->find('all'));
	}
	public function view($id)
	{
		$user = $this->Users->get($id);
		$this->set(compact('user'));
	}
	
}
?>