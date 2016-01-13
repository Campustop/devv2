<?php
namespace App\Controller\Admin;
use App\Controller\AppController;
use App\Controller\ProvinceController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CityController extends AppController
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
		
		
		//$this->set('city', $this->City->find());
		$this->set('city', $this->City->find('all')->contain(['Province']));

		//$state = $this->RegionMaster->find('list',array('fields' => array('region_id','region_name')));
		
		//print_r($city);
		// die;
		// 

		
    }
	
	public function add()
	{
		$city = $this->City->newEntity();
		if ($this->request->is('post'))
		{
			$city = $this->City->patchEntity($city, $this->request->data);
			if ($this->City->save($city))

			{
				$this->Flash->success(__('The city has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the city.'));
		}
		$this->set('city', $city);

		$getjobs = TableRegistry::get('Province');
        $province = $getjobs->find('list', ['keyField' => 'province_id','valueField' => 'province_name']); 

         $this->set('province', $province);
	}



	public function edit($id = null)
{



	$getjobs = TableRegistry::get('Province');
    $province = $getjobs->find('list', ['keyField' => 'province_id','valueField' => 'province_name']);
    $this->set('province', $province);

    $city = $this->City->get($id);
    if ($this->request->is(['post', 'put'])) {
    	pr($this->request->data);
	//die;
        $this->City->patchEntity($city, $this->request->data);
        if ($this->City->save($city)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('city', $city);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $city = $this->City->get($id);
    if ($this->City->delete($city)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>