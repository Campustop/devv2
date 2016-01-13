<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class DegreeController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		//$this->Auth->allow('add','edit');
		$this->viewBuilder()->layout('adminMain');
		//$this->Auth->allow(['add', 'edit','delete']);
		$this->Authadmin->deny(['add', 'edit','index','delete']);

		
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

			$degree->de_code=strtoupper($this->request->data['de_code']);
			if ($this->Degree->save($degree))

			{
				$this->Flash->success('The redord has been added successfully', [
          			'key' => 'positive',
      					]);
				return $this->redirect(['action' => 'index']);
			}
			
			$this->Flash->error('The redord has not been added.', [
          			'key' => 'nagative',
      					]);
		}
		$this->set('degree', $degree);



	}



	public function edit($id = null)
{
    $degree = $this->Degree->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Degree->patchEntity($degree, $this->request->data);

        $degree->de_code=strtoupper($this->request->data['de_code']);
        if ($this->Degree->save($degree)) {
             $this->Flash->success('The redord has been updated successfully', [
          			'key' => 'positive',
      					]);
            return $this->redirect(['action' => 'index']);
        }

        $this->Flash->error('The redord has not been updated.', [
          			'key' => 'nagative',
      					]);
    }

    $this->set('degree', $degree);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $degree = $this->Degree->get($id);
    if ($this->Degree->delete($degree)) {
        //$this->Flash->success(__('The record has been deleted.', h($id)));
         $this->Flash->success('The redord has been deleted successfully', [
          			'key' => 'delete',
      					]);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>