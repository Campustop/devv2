<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountrysController;
use App\Controller\UsersController;
use App\Controller\ProvinceController;
use App\Controller\CityController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class NoteController extends AppController
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
		$this->viewBuilder()->layout('user_profile');
		$this->Auth->deny(['add','index']);
		//$this->Auth->allow('index','add');
		$this->set('userData', $this->Auth->user());
		
		
		
	}
	public function index()
	{
		 $getjobs1 = TableRegistry::get('degree');
        $degree = $getjobs1->find('list', ['keyField' => 'degree_id','valueField' => 'de_name']);
        $this->set('degree', $degree);

        $getjobs2 = TableRegistry::get('program');
        $program = $getjobs2->find('list', ['keyField' => 'program_id','valueField' => 'pro_name']);
        $this->set('program', $program);

         $getjobs3 = TableRegistry::get('univercity');
        $univercity = $getjobs3->find('list', ['keyField' => 'univercity_id','valueField' => 'univercity_name']);
        $this->set('univercity', $univercity);

        $getjobs4 = TableRegistry::get('collage');
        $collage = $getjobs4->find('list', ['keyField' => 'collage_id','valueField' => 'collage_name']);
        $this->set('collage', $collage);

         $getjobs4 = TableRegistry::get('types_of_resource');
        $resource_name = $getjobs4->find('list', ['keyField' => 'resource_id','valueField' => 'resource_name']);
        $this->set('resource_name', $resource_name);

        $this->set('note', $this->Note->find('all'));
     		
	}

	public function add()
	{
			

			echo $id=$this->Auth->user('user_id');

			$noteTable = TableRegistry::get('note');

			$note = $noteTable->newEntity();

			pr($this->request->data);
			die;

			if ($this->request->is('post') || $this->request->is('put'))
					{

						 $tg = $this->request->data['tag'];
						 $tgstr = implode(",",$tg);

							$note->user_id = $id;
							$note->name_of_resourse = $this->request->data['name_of_resourse'];
							$note->collage_id = $this->request->data['collage_id'];
							$note->collage_restricted=$this->request->data['collage_restricted'];
							$note->program_id=$this->request->data['program_id'];
							$note->major_id=$this->request->data['degree_id'];
							$note->description_resourse=$this->request->data['description_resourse'];
							$note->tag=$tgstr;
							$note->resourse_type_id=$this->request->data['resourse_type_id'];
							$note->created_dt=$this->request->data['created_dt'];

							if ($nottmp = $noteTable->save($note))
							{
									$noteid = $nottmp->note_id;


								$note_video = TableRegistry::get('note_video_detail');
								$video = $note_video->newEntity();
								$video->youtube_links = $this->request->data['youtube_links'];
								$video->note_id = $noteid;
								$video->user_id = $this->Auth->user('user_id');
								$video->other_video_links = $this->request->data['other_video_links'];
								$video->created_dt=$this->request->data['created_dt'];
								$note_video->save($video);
									
									//die;//$this->Flash->success(__('The cms has been saved.'));
										$this->Flash->success('The record has been saved successfully', [
					          			'key' => 'positive',
					      					]);

									return $this->redirect(['action' => 'index']);
								}
								
								return $this->redirect(['action' => 'index']);
								$this->Flash->error('profile not been saved. Please, try again.');
								//$this->Flash->error('The record has not been saved', [
					}
	}
	public function upload()
	{
		pr($this->request->data);die;
	}

}
?>