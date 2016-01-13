<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CmsController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class PrivacypolicyController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		//$this->Auth->allow('add','edit');
		$this->viewBuilder()->layout('custom');
		$this->Auth->allow(['add', 'edit','delete']);

		
	}
	public function index()
    {

     
     // $privacypolicy = $this->Privacypolicy->newEntity();
     // $this->set('privacypolicy', $privacypolicy);
     // pr($this->request->data);
    	$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);

    	 $getjobs = TableRegistry::get('Cms');
        $cms = $getjobs->find()->where(['cms_title' => 'privacy policy'])->first();


        $this->set('cmspolicy', $cms);
      
  
		
    }
	

	
	
}
?>