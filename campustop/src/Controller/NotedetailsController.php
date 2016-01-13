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
		

		$articleTable = TableRegistry::get('note');
		$note = $articleTable->find()->where(['note.note_id' => $id])->contain(['Notedetail','Users','Typesofresource','Collage','Countrys','Program','Degree'])->first();

		$noteTable = TableRegistry::get('note_detail');
		$notedetails = $noteTable->find()->where(['note_detail.note_id' => $id])->toArray();
		//pr($note);die;
        $this->set('note', $note);

        $noterateTable = TableRegistry::get('note_rate');
		$noteratedetails = $noterateTable->find()->where(['note_rate.note_id' => $id,'user_id'=>$this->Auth->user('user_id')])->first();
        //pr($noteratedetails);die;

        $notesfeedbackTable = TableRegistry::get('note_feedback');
		$feedback = $notesfeedbackTable->find()->where(['note_feedback.note_id' => $id])->contain(['Note','Users'])->toArray();
		//pr($feedback);die;

		$notelistTable = TableRegistry::get('note');
        $notelist = $notelistTable->find()->contain(['Users'])->toArray();
        
         //pr($notelist);die;
        $this->set('notelist', $notelist);


        $this->set('feedback', $feedback);
        $this->set('notelist', $notelist);
        $this->set('notedetails', $notedetails);
        $this->set('noteratedetails', $noteratedetails);
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
		$article->exam_need = $this->request->data['exam'];
		$article->rating = $this->request->data['ratedata'];
		$article->display_name = $this->request->data['displayname'];
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
					

}
?>