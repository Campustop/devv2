<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CountrysController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','index','delete']);
	}
	public function index()
    {
		$this->set('countrys', $this->Countrys->find());
    }
	
	public function add()
	{
		$country = $this->Countrys->newEntity();
		if ($this->request->is('post'))
		{
			$country = $this->Countrys->patchEntity($country, $this->request->data);

			$country->country_code=strtoupper($this->request->data['country_code']);
			if ($this->Countrys->save($country, ['checkExisting' => false]))
			{
				$this->Flash->success('The record has been added successfully', ['key' => 'positive']);
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The record has not been added', ['key' => 'negative']);
		}
		$this->set('country', $country);
	}



	public function edit($id = null)
{
    $countrys = $this->Countrys->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Countrys->patchEntity($countrys, $this->request->data);

        $countrys->country_code=strtoupper($this->request->data['country_code']);
        if ($this->Countrys->save($countrys)) 
        {
          	$this->Flash->success('The record has been Updated successfully', ['key' => 'update']);
	        return $this->redirect(['action' => 'index']);
	    }
	       $this->Flash->error('The record has not been updates', ['key' => 'negative']);
    }

    $this->set('countrys', $countrys);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $countrys = $this->Countrys->get($id);
    if ($this->Countrys->delete($countrys)) 
   	{
        $this->Flash->success('The record has been Deleted successfully', ['key' => 'delete']);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>