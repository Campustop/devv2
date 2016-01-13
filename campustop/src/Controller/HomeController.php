<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\View\CellTrait;


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
		$note = TableRegistry::get('note');
	      	$note1 = $note->find()->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('note1', $note1);

	        $biographys = TableRegistry::get('biographys');
	      	$biography = $biographys->find()->where(['b_video_url =' => ''])->toArray();
	      	
	        
	        $this->set('biography', $biography);


	        $videos = TableRegistry::get('biographys');
	      	$video = $videos->find()->where(['b_video_url !=' => ''])->first();
	      	
	        $this->set('video', $video);
	        

		
		

		
	}
	public function login()
	{
	    if ($this->request->is('post')) 
	   	{
	        $user = $this->Auth->identify();
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
	public function subscribenewsletter()
	{
		$articlesTable = TableRegistry::get('newsletter');
		$article = $articlesTable->newEntity();

		$article->newslatter_email = $this->request->data['subscribe_email'];
		$article->newslatter_status = "S";
		$article->created_dt = time();


		$existingid = $articlesTable->find()->where(['newslatter_email' => $this->request->data['subscribe_email']])->first();
		if (!$existingid)
			{
				$articlesTable->save($article);
				echo "yes";die;
			}
			else
			{
				echo "no";die;
			}
	}
	public function setcountry()
	 {
	  $this->autoRender = false;
	     $session = $this->request->session();
	        $session->write('country', $this->request->data('country'));
	 }
}
?>