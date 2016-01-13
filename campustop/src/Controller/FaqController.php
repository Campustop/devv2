<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CmsController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class FaqController extends AppController
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

		$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);
     
      //$faq = $this->Faq->newEntity();
     // $this->set('faq', $faq);
    	 $getjobs = TableRegistry::get('Cms');
        $cms = $getjobs->find()->where(['cms_title' => 'faq'])->first();


        $this->set('faq', $cms);
     // pr($this->request->data);
      
  
		
    }
	

	
	
}
?>