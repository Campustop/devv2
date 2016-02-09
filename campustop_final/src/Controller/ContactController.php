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
    //$this->Auth->deny(['add', 'edit','index','delete']);

		
	}
	public function index()
  {

     
      $contact = $this->Contact->newEntity();
      $this->set('contact', $contact);

     // pr($this->request->data);
      
    if ($this->request->is('post'))
		{

      if($this->request->data['contact_name'] == "")
      {
        $this->Flash->success('Please enter a contact name', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
      elseif($this->request->data['contact_email'] == "")
      {
        $this->Flash->success('Please enter an email address. ', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
      elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $this->request->data['contact_email']))
      {
         $this->Flash->success('Please enter a valid email address. ', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
     elseif($this->request->data['contact_collage'] == "")
      {
        $this->Flash->success('Please enter a collage. ', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
      elseif($this->request->data['contact_phone'] == "")
      {
        $this->Flash->success('Please enter phone number ', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
      elseif(is_numeric($this->request->data['contact_phone']) == "")
      {
        $this->Flash->success('Please enter a numeric value on contact phone.', [
                'key' => 'nagative',
                ]);
        return $this->redirect(['action' => 'index']);
      }
      
      else
      {
        $this->Flash->success('Thanks for inquiry. we will get back to you soon.', [
                'key' => 'positive',
                ]);
      }
    // pr($this->request->data);
     /* $name = $this->request->data['contact_name'];
      $emailaddress = $this->request->data['contact_email'];
      $collage = $this->request->data['contact_collage'];
      $phone = $this->request->data['contact_phone'];
      $message = $this->request->data['contact_message'];

      $email = new Email('default');
	  $email->from(['me@example.com' => 'My Site'])
    		->to($emailaddress)
    		->subject('contact email')
    		->send($message);

    	}	  */   

	 
    }

	}

	
	
}
?>