<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CmsController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		//$this->Auth->allow('add','edit');
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
		
		
		$this->set('cms', $this->Cms->find());
		
		//print_r($cms);
		// die;
		// 

		
    }
	
	public function add()
	{
		$cms = $this->Cms->newEntity();
		if ($this->request->is('post'))
		{
			$cms = $this->Cms->patchEntity($cms, $this->request->data);
			if ($this->Cms->save($cms))

			{
				$this->Flash->success(__('The cms has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the Cms.'));
		}
		$this->set('cms', $cms);



	}



	public function edit($id = null)
{
    $cms = $this->Cms->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Cms->patchEntity($cms, $this->request->data);
        if ($this->Cms->save($cms)) {
            $this->Flash->success(__('Your cms has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your cms.'));
    }

    $this->set('cms', $cms);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $cms = $this->Cms->get($id);
    if ($this->Cms->delete($cms)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>