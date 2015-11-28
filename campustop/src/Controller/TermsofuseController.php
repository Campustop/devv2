<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class TermsofuseController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		//$this->Auth->allow('add','edit');
		$this->viewBuilder()->layout('custom');
		$this->Auth->allow(['add', 'edit','delete']);

		
	}
	public function index()
    {

     
     // $termsofuseController = $this->TermsofuseController->newEntity();
      //$this->set('termsofuseController', $termsofuseController);
     // pr($this->request->data);
      
  
		
    }
	

	
	
}
?>