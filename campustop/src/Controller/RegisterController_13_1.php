<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\Controller;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class RegisterController extends AppController
{
	 public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
      
    }

	public function beforeFilter(Event $event)
	{
		$this->Auth->autoRedirect = FALSE;	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('custom');
		
		
	}
	public function index()
	{
		if($this->Auth->user('user_id')!="")
		{
			return $this->redirect(['controller'=>'Home','action' => 'index']);
		}
		else
		{
		

	        $user = TableRegistry::get('users');
			$register = $user->newEntity();
			
			$this->set('register', $register);
		}
		
	}
	function add()
	{
		$user = TableRegistry::get('users');
		$register = $user->newEntity();
		
			  		
		if ($this->request->is('post'))
			  {
			   //pr($this->request->data);die;
			   $existingid = $user->find()->where(['username' => $this->request->data['username']])->first();
			   if (!empty($this->request->data)) 
			     {
			      if($this->request->data['firstname']!="")
			      {
			       $existingid = $user->find()->where(['username' => $this->request->data['username']])->first();
			       if($existingid!="")
			       {
			        $register ->fname=$this->request->data['firstname'];
			        $register ->lname=$this->request->data['lastname'];
			        $register ->mname=$this->request->data['middlename'];
			        $register ->username=$this->request->data['username'];
			        $register ->password=$this->request->data['password'];
			        $register ->role=$this->request->data['role'];
			        $register ->country_id=$this->request->data['country'];
			       }
			       else
			       {
			        $this->Flash->error('User email is already Exists.');
			        return $this->redirect(['action' => 'index']);
			       }
			       
			       
			      }
			      else
			      {
			       $existingid1 = $user->find()->where(['username' => $this->request->data['username1']])->first();
			       if($existingid1!="")
			       {
			        $register ->fname=$this->request->data['firstname1'];
			        $register ->lname=$this->request->data['lastname1'];
			        $register ->mname=$this->request->data['middlename1'];
			        $register ->username=$this->request->data['username1'];
			        $register ->password=$this->request->data['password'];
			        $register ->role=$this->request->data['role1'];
			        $register ->country_id=$this->request->data['country1'];
			       }
			       else
			       {
			        $this->Flash->error('User email is already Exists.');
			        return $this->redirect(['action' => 'index']);
			       }
			       //echo "hello";die;
			       
			      }
			      
			     }

			     }
	}
	function checkmail()
	{
		
		$getjobs = TableRegistry::get('users');
       	$query = $getjobs->find('all', [
    		'conditions' => ['username' => $this->request->data['username']]
		]);
		$row = $query->first();
		if(count($row)>0)
		{
			echo "1";die;
		}
		else
		{
			echo "0";die;
		}
	}
}
?>