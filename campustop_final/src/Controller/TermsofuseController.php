<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CmsController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class TermsofuseController extends AppController
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

     
     // $termsofuseController = $this->TermsofuseController->newEntity();
      //$this->set('termsofuseController', $termsofuseController);
     // pr($this->request->data);
    	$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);
        
       $getjobs = TableRegistry::get('Cms');
        $cms = $getjobs->find()->where(['cms_title' => 'Terms of use'])->first();

      //  $Collage1 = $this->Collage->find()->where(['collage_id' => $id])->first();

		//pr($cms);
		//die;
 
        //$province = $province->find()->where(['country_id' => $_POST['countryid']])->all();
        
       


        $this->set('cms', $cms);
  
		
    }
	

	
	
}
?>