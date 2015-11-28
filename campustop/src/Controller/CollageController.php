<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountrysController;
use App\Controller\ProvinceController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class CollageController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		//$this->Auth->allow('add','edit');
		$this->Auth->deny(['add', 'edit','delete','index']);

		
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
		//$this->set('collage', $this->Collage->find('all'));
		$this->set('collage', $this->Collage->find('all')->contain(['Province','Countrys']));

	

		//$state = $this->RegionMaster->find('list',array('fields' => array('region_id','region_name')));
		
		//print_r($city);
		// die;
		// 

		
    }
	
	public function add()
	{
		$collage = $this->Collage->newEntity();
		if ($this->request->is('post'))
		{
			$collage = $this->Collage->patchEntity($collage, $this->request->data);
			if ($this->Collage->save($collage))

			{
				$this->Flash->success(__('The collage has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Unable to add the collage.'));
		}
		$this->set('collage', $collage);

		$countrys = TableRegistry::get('Countrys');
		
       $countrys = $countrys->find('list', ['keyField' => 'country_id','valueField' => 'country_name']); 

       $this->set('country', $countrys);
		$province = TableRegistry::get('Province');
       
         $province = $province->find('list', ['keyField' => '	province_id','valueField' => 'province_name']); 

        $this->set('province', $province);
	}
function getprovince()
   	{

   			$province = TableRegistry::get('Province');
	       
	        // $province = $province->find('list', ['keyField' => 'province_id','valueField' => 'province_name']);

	        //$province = $province->find('list', ['keyField' => 'province_id','valueField' => 'province_name']);
	        
	       // $this->set('province', $province);
	        $province = $province->find()->where(['country_id' => $_POST['countryid']])->all();

	       

			echo json_encode($province);
			die;
			

		//echo $html.="</select>";

   			//$ItemTypeMaster = $this->ItemTypeMaster->find('all',array('conditions'=>array('company_id'=>$data['ItemTypeMaster']['company_id'],'is_active'=>'Y'),'order'=>'item_type_name ASC'));
  
  //echo json_encode($ItemTypeMaster);
	}


	public function edit($id = null)
{


	$getjobs = TableRegistry::get('Countrys');
    $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
    $this->set('country', $countrys);
   $getjobs1 = TableRegistry::get('Province');

   $Collage1 = $this->Collage->find()->where(['collage_id' => $id])->first();

    $province = $getjobs1->find('list', ['keyField' => 'province_id','valueField' => 'province_name'])->where(['country_id' => $Collage1->country_id]);
     $this->set('province', $province);

	       

    $collage = $this->Collage->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Collage->patchEntity($collage, $this->request->data);
        if ($this->Collage->save($collage)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('collage', $collage);
}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $collage = $this->Collage->get($id);
    if ($this->Collage->delete($collage)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>