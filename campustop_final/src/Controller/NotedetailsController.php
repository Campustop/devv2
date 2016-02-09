<?php
namespace App\Controller;
use App\Controller\AppController;

use App\Controller\CountrysController;
use App\Controller\UsersController;
use App\Controller\NoteController;
use App\Controller\ProvinceController;
use App\Controller\CityController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;




class NotedetailsController extends AppController
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
		$this->Auth->allow(['add','index','getfeedback']);
		//$this->Auth->allow('index','add');
		$this->set('userData', $this->Auth->user());
		
		
		
	}
	public function index($id)
	{
			$notes = TableRegistry::get('note');
						$existingdata = $notes->find()->where(['note_id' => $id])->first();

						//pr($existingdata);
						//die;

						if($existingdata != "")
						{
							

								$views = $existingdata->views;

								if($views!="")
								{
										$viewsnew = $views+1;
										//echo $viewsnew;

										
										$query = $notes->query();
									 	$query->update()
									     ->set(['views' =>$viewsnew])
									     ->where(['note_id' => $id])
				    					->execute();

				    			}
				    			else
				    			{
				    					$viewsnew = 1;
										

										
										$query = $notes->query();
									 	$query->update()
									     ->set(['views' =>$viewsnew])
									      ->where(['note_id' => $id])
				    					->execute();
				    			}
    					}


		$articleTable = TableRegistry::get('note');
		$note = $articleTable->find()->contain(['Users','Typesofresource','Collage','Countrys','Program','Degree'])->where(['note.note_id' => $id])->first();

		$noteTable = TableRegistry::get('note_detail');
		$notedetails = $noteTable->find()->where(['note_detail.note_id' => $id])->toArray();
        $this->set('note', $note);


		$users = TableRegistry::get('note_rate');
       	$query = $users->query();
        $ratedetails=$query->select(['rating' => $query->func()->avg('note_rate.rating')])->where(['note_rate.note_id' => $id]);
        $ratedetail=$ratedetails->first();

        $notesfeedbackTable = TableRegistry::get('note_feedback');
		$feedback = $notesfeedbackTable->find()->where(['note_feedback.note_id' => $id,'formtype' => "feedback"])->contain(['Note','Users'])->toArray();


		$notelistTable = TableRegistry::get('note');
        $notelist = $notelistTable->find()->contain(['Users'])->toArray();
        

        $getjobs4 = TableRegistry::get('collage');
        $collage = $getjobs4->find('list', ['keyField' => 'collage_id','valueField' => 'collage_name']);
        $this->set('collage', $collage);


        $userid=$this->Auth->user('user_id');
        $articleTable = TableRegistry::get('note_feedback');
		$userfeedback= $articleTable->find()->where(['formtype' => "feedback",'user_id'=>$userid,'note_id'=>$id])->first();

        $articleTable = TableRegistry::get('note_feedback');
		$customerreviewfeedback= $articleTable->find()->where(['formtype' => "customerreview",'user_id'=>$userid,'note_id'=>$id])->first();

		$articleTable = TableRegistry::get('note_feedback');
		$qualityrevieweedback= $articleTable->find()->where(['formtype' => "qualityreview",'user_id'=>$userid,'note_id'=>$id])->first();

		$articleTable = TableRegistry::get('note_copyright');
		$copyrightfeedback= $articleTable->find()->where(['user_id'=>$userid,'note_id'=>$id])->first();

		//pr($userfeedback);die;
		$this->set('customerreviewfeedback', $customerreviewfeedback);
		$this->set('qualityrevieweedback', $qualityrevieweedback);
		$this->set('copyrightfeedback', $copyrightfeedback);
     	$this->set('userfeedback', $userfeedback);
        $this->set('notelist', $notelist);
        $this->set('feedback', $feedback);
        $this->set('notelist', $notelist);
        $this->set('notedetails', $notedetails);
        $this->set('noteratedetails', $ratedetail);
        $this->set('userData', $this->Auth->user());

	}
	public function getfeedback()
	{
		

		$articlesTable = TableRegistry::get('note_feedback');
		$article = $articlesTable->newEntity();
		$article->note_id = $this->request->data['note_id'];
		$article->user_id = $this->request->data['user_id'];
		$article->title = $this->request->data['title'];
		$article->description = $this->request->data['description'];
		$article->exam_need = $this->request->data['feedbackexam'];
		$article->rating = $this->request->data['ratedata'];
		$article->created_dt = time();
		$article->formtype = $this->request->data['formtype'];
		

		$existingid = $articlesTable->find()->where(['user_id' => $this->request->data['user_id'],'note_id'=>$this->request->data['note_id'],'formtype'=>'feedback'])->first();

		if (!$existingid)
		{
			$articlesTable->save($article);
			echo "yes";die;
		}
		else
		{
			echo "no";die;
		}
	}
	public function getreview()
	{
		//pr($this->request->data);die;
		$articlesTable = TableRegistry::get('note_feedback');
		$article = $articlesTable->newEntity();
		$article->note_id = $this->request->data['customerreviewnoteid'];
		$article->user_id = $this->request->data['customerreviewuserid'];
		$article->title = $this->request->data['customerreviewtitle'];
		$article->description = $this->request->data['customerreviewdescription'];
		$article->exam_need = $this->request->data['customerreviewexam'];
		$article->rating = $this->request->data['customerreviewratedata'];
		$article->created_dt = time();
		$article->formtype = $this->request->data['customerreviewformtype'];


		$existingid = $articlesTable->find()->where(['user_id' => $this->request->data['customerreviewuserid'],'note_id'=>$this->request->data['customerreviewnoteid'],'formtype'=>'customerreview'])->first();
		if (!$existingid)
		{
			$articlesTable->save($article);
			echo "yes";die;
		}
		else
		{
			echo "no";die;
		}
	}
	public function getqualityreview()
	{
		//pr($this->request->data);die;
		$articlesTable = TableRegistry::get('note_feedback');
		$article = $articlesTable->newEntity();
		$article->note_id = $this->request->data['qualitysnote_id'];
		$article->user_id = $this->request->data['qualitysuser_id'];
		$article->title = $this->request->data['qualitystitle'];
		$article->description = $this->request->data['qualitysdescription'];
		$article->exam_need = $this->request->data['qualitysexam'];
		$article->rating = $this->request->data['qualityreviewratedata'];
		$article->created_dt = time();
		$article->formtype = $this->request->data['qualitysformtype'];


		$existingid = $articlesTable->find()->where(['user_id' => $this->request->data['qualitysuser_id'],'note_id'=>$this->request->data['qualitysnote_id'],'formtype'=>'qualityreview'])->first();
		if (!$existingid)
		{
			$articlesTable->save($article);
			echo "yes";die;
		}
		else
		{
			echo "no";die;
		}
	}
	public function getcopyrightreview()
	{
		//pr($this->request->data);die;
		$articlesTable = TableRegistry::get('note_copyright');
		$article = $articlesTable->newEntity();
		$article->note_id = $this->request->data['copyrightsnote_id'];
		$article->user_id = $this->request->data['copyrightsuser_id'];
		$article->username = $this->request->data['copyrightname'];
		$article->email = $this->request->data['copyrightemail'];
		$article->collage_id = $this->request->data['copyrightcollage'];
		$article->source = $this->request->data['copyrightsource'];
		$article->contact = $this->request->data['copyrightcontact'];
		$article->statement = $this->request->data['copyrightstatement'];
		$article->created_dt = time();


		$existingid = $articlesTable->find()->where(['user_id' => $this->request->data['copyrightsuser_id'],'note_id'=>$this->request->data['copyrightsnote_id']])->first();
		if (!$existingid)
		{
			$articlesTable->save($article);
			echo "yes";die;
		}
		else
		{
			echo "no";die;
		}
	}
	public function getrate()
	{
		$articlesTable = TableRegistry::get('note_rate');
		$article = $articlesTable->newEntity();


		$article->note_id = $this->request->data['note_id'];
		$article->user_id = $this->request->data['user_id'];
		$article->rating = $this->request->data['ratestore'];
		$article->created_dt = $this->request->data['created_dt'];


		$existingid = $articlesTable->find()->where(['user_id' => $this->request->data['user_id'],'note_id'=>$this->request->data['note_id']])->first();
		if (!$existingid)
			{
				$articlesTable->save($article);
				echo "yes";die;
			}
			else
			{
				echo "no";die;
			}
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
