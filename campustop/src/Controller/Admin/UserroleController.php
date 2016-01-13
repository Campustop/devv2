<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class  UserroleController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','delete']);

		
	}
	public function index()
    {
		$this->set('userrole', $this->Userrole->find());
    }
	
	public function add()
	{
		$userrole = $this->Userrole->newEntity();
		if ($this->request->is('post'))
		{
			$userrole = $this->Userrole->patchEntity($userrole, $this->request->data);
			if ($this->Userrole->save($userrole))
			{
				$this->Flash->success('The redord has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The redord has not been added', ['key' => 'negative']);
		}
		$this->set('userrole', $userrole);
	}
	public function edit($id = null)
	{
	    $userrole = $this->Userrole->get($id);
	    if ($this->request->is(['post', 'put'])) {
	        $this->Userrole->patchEntity($userrole, $this->request->data);
	        if ($this->Userrole->save($userrole)) 
	        {
	            $this->Flash->success('The redord has been Updated successfully', ['key' => 'update']);
	            return $this->redirect(['action' => 'index']);
	        }
	       $this->Flash->error('The redord has not been updates', ['key' => 'negative']);
	    }

	    $this->set('userrole', $userrole);
	}
	
public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $userrole = $this->Userrole->get($id);
    if ($this->Userrole->delete($userrole)) 
    {
       $this->Flash->success('The redord has been Deleted successfully', ['key' => 'delete']);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>