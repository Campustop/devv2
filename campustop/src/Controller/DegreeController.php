<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DegreeController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		//$this->Auth->allow('add','edit');
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
		
		
		$this->set('degree', $this->Degree->find());
		
		//print_r($countrys);
		// die;
		// 

		
    }
	
	public function add()
	{
		$degree = $this->Degree->newEntity();
		if ($this->request->is('post'))
		{
			$degree = $this->Degree->patchEntity($degree, $this->request->data);
			if ($this->Degree->save($degree))

			{
				$this->Flash->success(__('The degree has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the country.'));
		}
		$this->set('degree', $degree);



	}



	public function edit($id = null)
{
    $degree = $this->Degree->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Degree->patchEntity($degree, $this->request->data);
        if ($this->Degree->save($degree)) {
            $this->Flash->success(__('Your degree has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('degree', $degree);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $degree = $this->Degree->get($id);
    if ($this->Degree->delete($degree)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>