<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class HomeController extends AppController
{
	 public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
    }
	public function beforeFilter(Event $event)
	{	
		$this->Auth->autoRedirect = FALSE;	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('custom');
		
		
	}
	public function index()
	{
		//pr($this->Cookie->read('RememberMe'));die;
		
		
	}
	public function login()
	{
	    if ($this->request->is('post')) 
	   	{
	   		pr($this->request->data);
	        $user = $this->Auth->identify();

	   		//pr($user);die;


	        
	       	
	        if ($user) 
	        {
	            $this->Auth->setUser($user);
				
				$this->_setCookie();
	           return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error('Invalid username or password, try again', ['key' => 'negative']);
	        
	        return $this->redirect(['controller'=>'register','action' => 'index']);
	    }
	}
	 protected function _setCookie() {
        if (!$this->request->data('remember')) {
				$this->Cookie->delete('RememberMe');
            return false;
        }
        $data = [
            'username' => $this->request->data('username'),
            'password' => $this->request->data('password')
        ];
        $this->Cookie->write('RememberMe', $data, true, '+1 week');
        return true;
    }
	public function logout()
	{
	    return $this->redirect($this->Auth->logout());
	}
}
?>