<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

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
		$conn = ConnectionManager::get('default');
		
	}
	public function index()
	{
		
       	$note = TableRegistry::get('note');
	    
		$users = TableRegistry::get('note_rate');
	    $query = $users->query();
	    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
	        

	    $test = $note->find()->select(['note.note_id','note.name_of_resourse','note.note_id','note.note_id','rating'=>'r.AvgRating'])
	      	->join(['r' => [
            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
            'type' => 'LEFT',
            'conditions' => 'r.note_id = note.note_id',
        ]]);
      
    	$tests = $test->toArray();

	      	
	 // pr($tests);die;
	        $this->set('note1', $tests);
	         $this->set('rating', $tests);

       
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
				$session = $this->request->session();
				 $session->delete('loginsession');
				echo "yes";die;
	           
	        }
	        else
	        {
	        	echo "no";die;
	        }
	       
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
