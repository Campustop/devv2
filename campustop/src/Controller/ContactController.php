<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

class ContactController extends AppController
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

     
      $contact = $this->Contact->newEntity();
      $this->set('contact', $contact);
     // pr($this->request->data);
      
      if ($this->request->is('post'))
		{
      $name = $this->request->data['contact_name'];
      $emailaddress = $this->request->data['contact_email'];
      $collage = $this->request->data['contact_collage'];
      $phone = $this->request->data['contact_phone'];
      $message = $this->request->data['contact_message'];

      $email = new Email('default');
	  $email->from(['me@example.com' => 'My Site'])
    		->to($emailaddress)
    		->subject('contact email')
    		->send($message);

    	}	     

		
    }
	

	
	
}
?>