<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CountrysController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Auth->allow(['add', 'edit','delete']);

		
	}
	public function index()
    {

      /* if($this->request->is('ajax'))
		{

	            //$this->autoRender = false;
	            //$this->paginate = array();

			$this->DataTable->mDataProp = true;
            echo json_encode($this->DataTable->getResponse());
		}*/
		
		
		$this->set('countrys', $this->Countrys->find());
		
		//print_r($countrys);
		// die;
		// 

		
    }
	
	public function add()
	{
		$country = $this->Countrys->newEntity();
		if ($this->request->is('post'))
		{
			$country = $this->Countrys->patchEntity($country, $this->request->data);
			if ($this->Countrys->save($country))

			{
				$this->Flash->success(__('The country has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the country.'));
		}
		$this->set('country', $country);



	}



	public function edit($id = null)
{
    $countrys = $this->Countrys->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Countrys->patchEntity($countrys, $this->request->data);
        if ($this->Countrys->save($countrys)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('countrys', $countrys);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $countrys = $this->Countrys->get($id);
    if ($this->Countrys->delete($countrys)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>