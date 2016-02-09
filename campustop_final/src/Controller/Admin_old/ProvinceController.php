<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProvinceController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
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

	//	$query = $this->Province->find('all');
		//pr($query);die;
		//$getjobs = TableRegistry::get('Countrys');
		//$query = $getjobs->find('all')->contain(['Countrys']);

		//pr($query);
		
		$this->set('province', $this->Province->find('all')->contain(['Countrys']));

		
		
		//print_r($city);
		// die;
		// 

		
    }
	
	public function add()
	{
		$province = $this->Province->newEntity();
		if ($this->request->is('post'))
		{
			$province = $this->Province->patchEntity($province, $this->request->data);

			//pr($province);
			//die;

			if ($this->Province->save($province))

			{
				$this->Flash->success(__('The city has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the city.'));
		}
		$this->set('province', $province);
		//$data =  $this->Countrys->find('list', ['fields' => ['country_id','country_name']]);
		//$this->set('country', $data);

		//$query = $this->Countrys->find('all');
		$getjobs = TableRegistry::get('Countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']); 


        $this->set('country', $countrys);
	}



	public function edit($id = null)
{
	$getjobs = TableRegistry::get('Countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);


        $this->set('country', $countrys);
    $province = $this->Province->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Province->patchEntity($province, $this->request->data);
        if ($this->Province->save($province)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('province', $province);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $province = $this->Province->get($id);
    if ($this->Province->delete($province)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>