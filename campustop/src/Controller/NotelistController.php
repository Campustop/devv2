<?php
namespace App\Controller;
use App\Controller\AppController;

use App\Controller\CountrysController;
use App\Controller\UsersController;
use App\Controller\ProvinceController;
use App\Controller\CityController;
use App\Controller\NoteController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Response;
use Cake\Datasource\ConnectionManager;

class NotelistController extends AppController
{
	 public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth');
    }
	public function beforeFilter(Event $event)
	{	
		$this->Auth->autoRedirect = FALSE;	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('custom');
		$this->Auth->allow('index','add','ratingcal','gridlist','notlistfree','notelistpr','gridlistfree','notelistpr','gridlistfree','gridlistpr');
		$this->set('userData', $this->Auth->user());
		
		
		
	}

		function index()
		{
			 $note = TableRegistry::get('note');
	        //$note1 = $note->find()->contain(['Users','Noterate']);

	        $users = TableRegistry::get('note_rate');
	         $query = $users->query();
	         //$ratedetails=$note1->select(['rating' => $query->func()->avg('Noterate.rating')])->where(['Noterate.note_id' => 8]);
	         //$ratedetail=$ratedetails->toArray();
	         //pr($ratedetail);die;
	     $this->set('note1', $ratedetail);



	     	    $test = $note->find('all')->select(['rating' => $query->func()->avg('note_rate.rating1'),'Note.note_id'])
		    ->leftJoin('note_rate', 'note_rate.note_id = Note.note_id');
		    //->where('Noterate.note_id' = 1);
				$tests = $test->toArray();
				pr($tests);die;



	
           // ->where(['b.category_id' => 1]);

            $query1 = $query->toArray();
				pr($query1);die;
	        

	        $this->set('note1', $note1);







	        //echo "sdfdsf";
	       // die;
			
		}

		function ratingcal($id)
		{

			 $users = TableRegistry::get('note_rate');
	        $query = $users->query();
	        $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')])->where(['note_rate.note_id' => $id]);
	        $ratedetail=$ratedetails->first();
	        echo $ratedetail;
		}


		public function gridlist()
      	{

    	$note = TableRegistry::get('note');
	      	$note1 = $note->find()->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('note1', $note1);

    	}
    	public function notlistfree()
      	{

    	$note = TableRegistry::get('note');
	      	$notefree = $note->find()->where(['totalprice' => '0.00'])->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('notefree', $notefree);

    	}
    	public function notelistpr()
      	{

    	$note = TableRegistry::get('note');
	      	$notepr = $note->find()->where(['totalprice >' => '0.00'])->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('notepr', $notepr);

    	}

    	public function gridlistfree()
      	{

    	$note = TableRegistry::get('note');
	      	$gridfree = $note->find()->where(['totalprice' => '0.00'])->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('gridfree', $gridfree);

    	}
    	public function gridlistpr()
      	{

    	$note = TableRegistry::get('note');
	      	$gridnotepr = $note->find()->where(['totalprice >' => '0.00'])->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        $this->set('gridnotepr', $gridnotepr);

    	}

					

}
?>