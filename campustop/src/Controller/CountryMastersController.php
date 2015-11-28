<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class CountryMastersController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
	
	}
	public function index()
	{
		
	}
	
	
	public function add()
	    {
	        $article = $this->Articles->newEntity();
	        if ($this->request->is('post')) {
	            $article = $this->Articles->patchEntity($article, $this->request->data);
	            if ($this->Articles->save($article)) {
	                $this->Flash->success(__('Your article has been saved.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('Unable to add your article.'));
	        }
	        $this->set('article', $article);
	   }
		

	
}
?>