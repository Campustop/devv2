<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
class NewsletterController extends AppController
{
	
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','index','delete']);
		
	}
	public function index()
	{
		$this->set('newletters', $this->Newsletter->find('all'));
	}
	public function subscribe($id)
	{
		$users = TableRegistry::get('newsletter');
		$query = $users->query();
		$query->update()
		    ->set(['newslatter_status' => "S"])
		    ->where(['newslatter_id' => $id])
		    ->execute();
		return $this->redirect(['action' => 'index']);

	}
	public function unsubscribe($id)
	{
		$users = TableRegistry::get('newsletter');
		$query = $users->query();
		$query->update()
		    ->set(['newslatter_status' => "U"])
		    ->where(['newslatter_id' => $id])
		    ->execute();
		return $this->redirect(['action' => 'index']);

	}
	function exporttoexcel()
	 {
	  	$this->autoRender = false;
		$this->layout = false;
		$fileName = "subscriptionreport".date("d-m-y:h:s").".xls";
		$results = $this->Newsletter->find('all');
		$headerRow = ["Subscriber Name", "Subscriber Email"];
		$items = []	;
		foreach($results as $result)
						{
								$items[]=[$result['NewsletterMaster']['email']];
						}
		//print_R($items);
		  $this->ExportXls->export($fileName, $headerRow,$items);
  }
}
?>