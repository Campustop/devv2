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
		$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);

        $user = TableRegistry::get('users');
		$register = $user->newEntity();
		
		$this->set('register', $register);
	}
	function add()
	{
		$user = TableRegistry::get('users');
		$register = $user->newEntity();
		
		if ($this->request->is('post'))
		{
			//pr($this->request->data);die;
			if (!empty($this->request->data)) 
					{
						if($this->request->data['firstname']!="")
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
							//echo "hello";die;
							$register ->fname=$this->request->data['firstname1'];
							$register ->lname=$this->request->data['lastname1'];
							$register ->mname=$this->request->data['middlename1'];
							$register ->username=$this->request->data['username1'];
							$register ->password=$this->request->data['password'];
							$register ->role=$this->request->data['role1'];
							$register ->country_id=$this->request->data['country1'];
						}
						
					}
			  
					if ($user->save($register))
					{
						
							if($this->request->data['news']=="on")
							{
								$newsletter = TableRegistry::get('newsletter');
								$news = $newsletter->newEntity();
								$news->newslatter_email = $this->request->data['username'];
								$news->newslatter_status = 1;
								$newsletter->save($news);
							}
							
			  		 	$this->Flash->success('The user has been saved', [
						    'key' => 'positive',
						]);
			   			return $this->redirect(['action' => 'index']);
			   		} 
			   		else 
			   		{
			  			$this->Flash->error('Records not be saved. Please, try again.');
			   		}
		}
	}
	function checkmail()
	{
		echo $this->request->data['username'];die;
		$getjobs = TableRegistry::get('users');
       	$query = $articles->find('all', [
    		'conditions' => ['username' => $this->request->data['username']]
		]);
		$row = $query->first();
		
	}
}
?>