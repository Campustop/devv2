<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CmsController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		//$this->Auth->allow('add','edit');
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
				//$this->Flash->success(__('The cms has been saved.'));
					$this->Flash->success('The record has been saved successfully', [
          			'key' => 'positive',
      					]);

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error('The record has not been saved', [
          			'key' => 'nagative',
      					]);
		}
		$this->set('cms', $cms);



	}



	public function edit($id = null)
{
    $cms = $this->Cms->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Cms->patchEntity($cms, $this->request->data);
        if ($this->Cms->save($cms)) {

            //$this->Flash->success(__('Your cms has been updated.'));
            $this->Flash->success('The redord has been updated successfully', [
          			'key' => 'positive',
      					]);
            return $this->redirect(['action' => 'index']);
        }
        //$this->Flash->error(__('Unable to update your cms.'));

           $this->Flash->error('The redord has not been updated.', [
          			'key' => 'nagative',
      					]);
    }

    $this->set('cms', $cms);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $cms = $this->Cms->get($id);
    if ($this->Cms->delete($cms)) {
       // $this->Flash->success(__('The record has been deleted.', h($id)));
    	 $this->Flash->success('The redord has been deleted successfully', [
          			'key' => 'positive',
      					]);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>