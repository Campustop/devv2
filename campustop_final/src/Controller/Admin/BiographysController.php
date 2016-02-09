<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class BiographysController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','index','delete']);

		
	}
	public function index()
    {
    	
		$this->set('biography', $this->Biographys->find());	
    }
	
	public function add()
	{
		$biography = $this->Biographys->newEntity();
		if ($this->request->is('post'))
		{
			$biography = $this->Biographys->patchEntity($biography, $this->request->data);
			if ($this->Biographys->save($biography, ['checkExisting' => false]))
			{
				$this->Flash->success('The redord has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The redord has not been added', ['key' => 'negative']);
		}
		$this->set('biography', $biography);
	}
	public function edit($id = null)
	{
    	$biography = $this->Biographys->get($id);
    	if ($this->request->is(['post', 'put'])) 
    	{
	        $this->Biographys->patchEntity($biography, $this->request->data);
	        if ($this->Biographys->save($biography)) 
	        {
	           	$this->Flash->success('The redord has been Updated successfully', ['key' => 'update']);
		        return $this->redirect(['action' => 'index']);
		    }
		       $this->Flash->error('The redord has not been updates', ['key' => 'negative']);
    	}

    $this->set('biography', $biography);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $biography = $this->Biographys->get($id);
    if ($this->Biographys->delete($biography))
    {
       $this->Flash->success('The record has been Deleted successfully', ['key' => 'delete']);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>