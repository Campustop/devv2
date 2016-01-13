<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProgramController extends AppController
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
		
		
		$this->set('program', $this->Program->find());
		
		//print_r($countrys);
		// die;
		// 

		
    }
	
	public function add()
	{
		$program = $this->Program->newEntity();
		if ($this->request->is('post'))
		{
			$program = $this->Program->patchEntity($program, $this->request->data);
			
			$program->pro_code=strtoupper($this->request->data['pro_code']);
			if ($this->Program->save($program))

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
		$this->set('program', $program);



	}



	public function edit($id = null)
{
    $program = $this->Program->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Program->patchEntity($program, $this->request->data);
        $program->pro_code=strtoupper($this->request->data['pro_code']);
        if ($this->Program->save($program)) {
            $this->Flash->success('The redord has been added successfully', [
          			'key' => 'positive',
      					]);
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error('The redord has not been added.', [
          			'key' => 'nagative',
      					]);
    }

    $this->set('program', $program);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $program = $this->Program->get($id);
    if ($this->Program->delete($program)) {
        //$this->Flash->success(__('The record has been deleted.', h($id)));
         $this->Flash->success('The redord has been deleted successfully', [
          			'key' => 'positivedelete',
      					]);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>