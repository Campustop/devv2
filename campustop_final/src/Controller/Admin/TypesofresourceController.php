<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class  TypesofresourceController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
       	$this->Authadmin->deny(['add', 'edit','index','delete']);
		
		

		
	}
	public function index()
    {
		$resource= $this->Typesofresource->find();
		$this->set('resource', $resource);
    }
    
	
	public function add()
	{
		$resource = $this->Typesofresource->newEntity();
		if ($this->request->is('post'))
		{
			$resource = $this->Typesofresource->patchEntity($resource, $this->request->data);
			if ($this->Typesofresource->save($resource))
			{
				$this->Flash->success('The record has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The record has not been added', ['key' => 'negative']);
		}
		$this->set('resource', $resource);
	}
	public function edit($id = null)
	{
	    $resource = $this->Typesofresource->get($id);
	    if ($this->request->is(['post', 'put'])) 
	    {
	        $this->Typesofresource->patchEntity($resource, $this->request->data);
	        if ($this->Typesofresource->save($resource)) 
	        {
	             $this->Flash->success('The redord has been Updated successfully', ['key' => 'update']);
	            return $this->redirect(['action' => 'index']);
	        }
	       $this->Flash->error('The redord has not been updates', ['key' => 'negative']);
	    }

	    $this->set('resource', $resource);
	}
	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);

	    $resource = $this->Typesofresource->get($id);
	    if ($this->Typesofresource->delete($resource))
	    {
	        $this->Flash->success('The redord has been Deleted successfully', ['key' => 'delete']);
	        return $this->redirect(['action' => 'index']);
	    }
	}
	
	
}
?>