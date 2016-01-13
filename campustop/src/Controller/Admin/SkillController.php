<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class  SkillController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
       $this->Authadmin->deny(['add', 'edit','index','delete']);
		
		

		
	}
	public function index()
    {
		$this->set('skill', $this->Skill->find());
    }
	
	public function add()
	{
		$skill = $this->Skill->newEntity();
		if ($this->request->is('post'))
		{
			$userrole = $this->Skill->patchEntity($skill, $this->request->data);
			if ($this->Skill->save($userrole))
			{
				$this->Flash->success('The record has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The record has not been added', ['key' => 'negative']);
		}
		$this->set('skill', $skill);
	}
	public function edit($id = null)
	{
	    $skill = $this->Skill->get($id);
	    if ($this->request->is(['post', 'put'])) 
	    {
	        $this->Skill->patchEntity($skill, $this->request->data);
	        if ($this->Skill->save($skill)) 
	        {
	             $this->Flash->success('The redord has been Updated successfully', ['key' => 'update']);
	            return $this->redirect(['action' => 'index']);
	        }
	       $this->Flash->error('The redord has not been updates', ['key' => 'negative']);
	    }

	    $this->set('skill', $skill);
	}
	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);

	    $skill = $this->Skill->get($id);
	    if ($this->Skill->delete($skill))
	    {
	        $this->Flash->success('The redord has been Deleted successfully', ['key' => 'delete']);
	        return $this->redirect(['action' => 'index']);
	    }
	}
	
	
}
?>