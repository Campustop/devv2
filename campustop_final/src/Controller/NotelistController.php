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
		   
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $test = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->order(['note.note_id' => 'DESC']);
	      
	    	$tests = $test->toArray();

		      	
		  		//pr($tests);die;
		        $this->set('note1', $tests);






	
          






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
		    
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $test = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->order(['note.note_id' => 'DESC']);
	      
	    	$tests = $test->toArray();

		      	
		  		//pr($tests);die;
		        $this->set('note1', $tests);


    	}
    	public function notlistfree()
      	{

    	 $note = TableRegistry::get('note');
		   
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $noteprf = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->where(['note.totalprice ' => '0.00'])->order(['note.note_id' => 'DESC']);
	      
	    	$notefree = $noteprf->toArray();
	        $this->set('notefree', $notefree);

    	}
    	public function notelistpr()
      	{

    	//$note = TableRegistry::get('note');
	      	//$notepr = $note->find()->where(['totalprice >' => '0.00'])->contain(['Users'])->toArray();
	      	
	        //pr($note1);
	        //$this->set('notepr', $notepr);

	         $note = TableRegistry::get('note');
		    
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $notepr = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->where(['note.totalprice >' => '0.00'])->order(['note.note_id' => 'DESC']);
	      
	    	$tests = $notepr->toArray();

		      	
		  		//pr($tests);die;
		        $this->set('notepr', $tests);


    	}

    	public function gridlistfree()
      	{

    	 $note = TableRegistry::get('note');
		    
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $gridprf = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->where(['note.totalprice ' => '0.00'])->order(['note.note_id' => 'DESC']);
	      
	    	$gridfree = $gridprf->toArray();
	       

	        $this->set('gridfree', $gridfree);

    	}
    	public function gridlistpr()
      	{

    	  $note = TableRegistry::get('note');
		    
			$users = TableRegistry::get('note_rate');
		    $query = $users->query();
		    $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')]);
		        

		    $notepr = $note->find()->select(['note.note_id','note.resource_id','u.fname','u.mname','u.lname','note.user_id','note.name_of_resourse','note.description_resourse','note.totalprice','note.note_id','note.note_id','rating'=>'r.AvgRating'])
		      	->join(['r' => [
	            'table' => '(SELECT r.note_id, AVG(r.rating) as AvgRating FROM note_rate r GROUP BY r.note_id)',
	            'type' => 'LEFT',
	            'conditions' => 'r.note_id = note.note_id',
	        ]])->join(['u' => [
	            'table' => 'users',
	            'type' => 'LEFT',
	            'conditions' => 'u.user_id = note.user_id',
	        ]])->where(['note.totalprice >' => '0.00'])->order(['note.note_id' => 'DESC']);
	      
	    	$tests = $notepr->toArray();

	        $this->set('gridnotepr', $tests);

    	}

	public function notfound()
    	{
    		if(isset($_POST['searchtext']))
    		{
    		 $this->set('searchtext', $_POST['searchtext']);

    		}
    	}
					

}
?>
