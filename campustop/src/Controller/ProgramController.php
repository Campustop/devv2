<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProgramController extends AppController
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
			if ($this->Program->save($program))

			{
				$this->Flash->success(__('The program has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the program.'));
		}
		$this->set('program', $program);



	}



	public function edit($id = null)
{
    $program = $this->Program->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Program->patchEntity($program, $this->request->data);
        if ($this->Program->save($program)) {
            $this->Flash->success(__('Your Program has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your Program.'));
    }

    $this->set('program', $program);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $program = $this->Program->get($id);
    if ($this->Program->delete($program)) {
        $this->Flash->success(__('The program with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>