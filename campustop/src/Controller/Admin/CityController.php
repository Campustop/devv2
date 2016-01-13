<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use App\Controller\ProvinceController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CityController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		//$this->Auth->allow(['add', 'edit','delete']);
		$this->Authadmin->deny(['add', 'edit','index','delete']);

		
	}
	public function index()
    {

     
		$this->set('city', $this->City->find('all')->contain(['Province']));

		
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
				//$this->Flash->success(__('The city has been saved.'));
				$this->Flash->success('The record has been saved successfully', [
          			'key' => 'positive',
      					]);
				return $this->redirect(['action' => 'index']);
			}
			else
			{
			$this->Flash->error('The record has not been saved', [
          			'key' => 'nagative',
      					]);
		}
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
             	$this->Flash->success('The redord has been updated successfully', [
          			'key' => 'positive',
      					]);
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error('The redord has not been updated.', [
          			'key' => 'nagative',
      					]);
    }

    $this->set('city', $city);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $city = $this->City->get($id);
    if ($this->City->delete($city)) {
       // $this->Flash->success(__('The record has been deleted.', h($id)));
        $this->Flash->success('The redord has been deleted successfully', [
          			'key' => 'positive',
      					]);
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>