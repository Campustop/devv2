<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;



class UnivercityController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','delete','index']);

		
	}
	public function index()
    {
      
		$this->set('univercity', $this->Univercity->find('all')->contain(['Countrys']));

    }
	
	public function add()
	{
		$univercity = $this->Univercity->newEntity();
		if ($this->request->is('post'))
		{
			$univercity = $this->Univercity->patchEntity($univercity, $this->request->data);
			if ($this->Univercity->save($univercity))
			{
				$this->Flash->success('The record has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The record has not been added', ['key' => 'negative']);
		}
		$this->set('univercity', $univercity);
		$getjobs = TableRegistry::get('Countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']); 


        $this->set('country', $countrys);
	}
	public function edit($id = null)
	{
		$getjobs = TableRegistry::get('Countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);
    	$univercity = $this->Univercity->get($id);
    	if ($this->request->is(['post', 'put'])) 
    	{
	        $univercity=$this->Univercity->patchEntity($univercity, $this->request->data);
	        if ($this->Univercity->save($univercity)) 
	        {
		         $this->Flash->success('The record has been Updated successfully', ['key' => 'update']);
		        return $this->redirect(['action' => 'index']);
		    }
		       $this->Flash->error('The record has not been updates', ['key' => 'negative']);
	    }
		$this->set('univercity', $univercity);
	}
	public function delete($id)
	{
	    $this->request->allowMethod(['post', 'delete']);

	    $univercity = $this->Univercity->get($id);
	    if ($this->Univercity->delete($univercity))
	    {
	        $this->Flash->success('The redord has been Deleted successfully', ['key' => 'delete']);
	        return $this->redirect(['action' => 'index']);
	    }
	}
	
	
}
?>