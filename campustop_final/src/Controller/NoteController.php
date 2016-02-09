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
		$this->Auth->deny(['addnotedetails']);
		
		$this->set('userData', $this->Auth->user());
		
		
		
	}
	public function index()
	{
	$id=$this->Auth->user('user_id');

		if($id != "")
	{
		
         $getjobs4 = TableRegistry::get('degree');
        $degree = $getjobs4->find()->toArray();
        $this->set('degree', $degree);

        $getjobs2 = TableRegistry::get('program');
        $program = $getjobs2->find('list', ['keyField' => 'program_id','valueField' => 'pro_name']);
        $this->set('program', $program);

         $getjobs3 = TableRegistry::get('univercity');
        $univercity = $getjobs3->find('list', ['keyField' => 'univercity_id','valueField' => 'univercity_name']);
        $this->set('univercity', $univercity);

        $getjobs4 = TableRegistry::get('collage');
        $collage = $getjobs4->find()->toArray();
        $this->set('collage', $collage);

         $getjobs4 = TableRegistry::get('types_of_resource');
        $resource_name = $getjobs4->find('list', ['keyField' => 'resource_id','valueField' => 'resource_name']);
        $this->set('resource_name', $resource_name);

         $getjobs5 = TableRegistry::get('countrys');
        $rcountry_name = $getjobs5->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country_name', $rcountry_name);

        $this->set('note', $this->Note->find('all'));

	
	    }
	    else
	    {
	    	$session = $this->request->session();
			$session->write('loginsession', "The record has been saved successfully");
			return $this->redirect(['controller'=>'home','action' => 'index']);

	    }
     		
	}
	
	public function addnotedetails()
	{
		$this->autoRender = false;

		$id=$this->Auth->user('user_id');
		$noteTable = TableRegistry::get('note');
		$note = $noteTable->newEntity();
			
		
		if ($this->request->is('post') || $this->request->is('put'))
		{
				if($this->request->data['resource_id'] == "3") 
				{
					$price=$this->request->data['finalnoteprice'];
					if(isset($this->request->data['note_file']))
					{
						$filecount = count($this->request->data['note_file']);

					}
					else
					{
						$filecount = 0;
					}
					
				}
				else if($this->request->data['resource_id'] == "7") 
				{
					$price=$this->request->data['finalcaseprice'];
				
					if(isset($this->request->data['case_file']))
					{
						$filecount = count($this->request->data['case_file']);

					}
					else
					{
						$filecount = 0;
					}
				}
				else if($this->request->data['resource_id'] == "6") 
				{
					$price=$this->request->data['finaltotalresearchprice'];
					

					if(isset($this->request->data['research_file']))
					{
						$filecount = count($this->request->data['research_file']);
					}
					else
					{
						$filecount = 0;
					}
					
				}
				else if($this->request->data['resource_id'] == "5") 
				{
					$price="0.00";
					$filecount = 1;
				}
			
				//die;
				$existingid = $noteTable->find()->where(['name_of_resourse' => $this->request->data['name_of_resourse'],'user_id'=>$id])->first();
				if($existingid=="" && $filecount>0)
				{
					$note->user_id = $id;
					$note->name_of_resourse = $this->request->data['name_of_resourse'];
					$note->collage_id = $this->request->data['collage_id'];
					$note->country_id = $this->request->data['country_id'];
					$note->collage_restricted=$this->request->data['collage_restricted'];
					$note->program_id=$this->request->data['program_id'];
					$note->degree_id=$this->request->data['degree_id'];
					$note->description_resourse=$this->request->data['description_resourse'];
					$note->tag=$this->request->data['tag'];
					$note->resource_id=$this->request->data['resource_id'];
					$note->created_dt=time();
					$note->totalprice=$price;


					
				}

				else if($filecount == 0)
				{
					
					$this->Flash->error('You must have to select a file.', ['key' => 'nagative']);

					echo "dsfsdfdsf======xxx";
					//die;

					return $this->redirect(['action' => 'index']);
				}
				

				else if($existingid!="")
				{
					echo "dsfsdfdsf";
					$this->Flash->error('The name of resourse is already Exists', ['key' => 'nagative']);
					return $this->redirect(['action' => 'index']);
				}

				
				


				
				if ($nottmp = $noteTable->save($note))
				{
					pr($this->request->data);
					echo "aaaaaaaaaaaa";
					
						$notesTable = TableRegistry::get('note_detail');
						$notes = $notesTable->newEntity();
						$noteid = $nottmp->note_id;
						if($this->request->data['resource_id'] == "3") 
						{
							

									$notes = $notesTable->query();
				  					foreach($this->request->data['note_file'] as $k => $v)
									{
										if(isset($this->request->data['free_for_collage'][$k]))
										{
											
												if($this->request->data['free_for_collage'][$k]=="on")
												{
													$uploadflag = "Y";
												}
												else
												{
													$uploadflag = "N";
												}
										}
										else
										{
											$uploadflag = "";
										}
										
										$notes->insert(['file_name', 'file_title', 'file_price','created_dt', 'upload_collage_user_flag','note_id','user_id'])
										->values([
										'file_name' => $this->request->data['note_file'][$k],
										'file_title' => $this->request->data['file_title'][$k], 
										'file_price' => $this->request->data['price'][$k],
										'created_dt' => time(),
										'upload_collage_user_flag' => $uploadflag,
										'note_id'=>$noteid,
										'user_id' => $id
										])
										->execute();
									}

										$session = $this->request->session();
			        					$session->write('notepositive', "The record has been saved successfully");
						  				return $this->redirect(['action' => 'index']);
										

						}
						else if($this->request->data['resource_id'] == "7") 
						{
										$casestudy = TableRegistry::get('note_casestudy_detail');
										$case = $casestudy->newEntity();
										$case->field = $this->request->data['casefield'];
										$case->note_id = $noteid;
										$case->user_id = $this->Auth->user('user_id');
										$case->created_dt=time();
										$casedata=$casestudy->save($case);

										$caseid = $casedata->note_casestudy_id;


									$notes = $notesTable->query();

				  					foreach($this->request->data['case_file'] as $k => $v)
									{

										if(isset($this->request->data['case_free_for_collage'][$k]))
										{
											
												if(isset($this->request->data['case_free_for_collage'][$k]) || $this->request->data['case_free_for_collage'][$k]=="on")
												{
													$uploadflag = "Y";
												}
												else
												{
													$uploadflag = "N";
												}
										}
										else
										{
											$uploadflag = "";
										}
										
										
										$notes->insert(['file_name', 'file_title', 'file_price','created_dt', 'upload_collage_user_flag','note_id','user_id','case_id'])
										->values([
										'file_name' => $this->request->data['case_file'][$k],
										'file_title' => $this->request->data['case_file_title'][$k], 
										'file_price' => $this->request->data['case_price'][$k],
										'created_dt' => time(),
										'upload_collage_user_flag' => $uploadflag,
										'note_id'=>$noteid,
										'user_id' => $id,
										'case_id'=>$caseid
										])
										->execute();
									}

									$session = $this->request->session();
			        				$session->write('notepositive', "The record has been saved successfully");
						  			return $this->redirect(['action' => 'index']);
				  		}	
	
						else if($this->request->data['resource_id'] == "5")
						{
									$note_video = TableRegistry::get('note_video_detail');
									$video = $note_video->newEntity();
									$video->youtube_links = $this->request->data['youtube_links'];
									$video->note_id = $noteid;
									$video->user_id = $this->Auth->user('user_id');
									$video->other_video_links = $this->request->data['other_video_links'];
									$video->created_dt=time();
									$note_video->save($video);

									$session = $this->request->session();
			        				$session->write('notepositive', "The record has been saved successfully");
						  			return $this->redirect(['action' => 'index']);
						}
						
						else if($this->request->data['resource_id'] == "6") 
						{
								
										$rd = $this->request->data['read_at'];
									    $readta = implode(",",$rd);
									    $tm = $this->request->data['team_member'];
									    $tmm = implode(",",$tm);
									    $ug = $this->request->data['under_gidance'];
										$ugm = implode(",",$ug);
								        $note_research = TableRegistry::get('note_reserchpaper_detail');
								        $research = $note_research->newEntity();
								        $research->note_id = $noteid;
										$research->user_id = $this->Auth->user('user_id');
										$research->field = $this->request->data['field'];
										$research->read_at = $readta;
										$research->publish_in = $this->request->data['publish_in'];
										$research->publish_on_month = $this->request->data['publish_on_month'][0];
										$research->publish_on_year=$this->request->data['publish_on_year'][0];
										$research->team_member=$tmm;
										$research->under_gidance=$ugm;
										$research->created_dt=time();
										$researchdata= $note_research->save($research);

										$researchid = $researchdata->note_casestudy_id;

										$notes = $notesTable->query();
										foreach($this->request->data['research_file'] as $k => $v)
										{
											if(isset($this->request->data['research_free_for_collage'][$k]))
											{
												
													if(isset($this->request->data['research_free_for_collage'][$k]) || $this->request->data['research_free_for_collage'][$k]=="on")
													{
														$uploadflag = "Y";
													}
													else
													{
														$uploadflag = "N";
													}
											}
											else
											{
												$uploadflag = "";
											}
											
											
											$notes->insert(['file_name', 'file_title', 'file_price','created_dt', 'upload_collage_user_flag','note_id','user_id','research_id'])
											->values([
											'file_name' => $this->request->data['research_file'][$k],
											'file_title' => $this->request->data['research_file_title'][$k], 
											'file_price' => $this->request->data['research_price'][$k],
											'created_dt' =>time(),
											'upload_collage_user_flag' => $uploadflag,
											'note_id'=>$noteid,
											'user_id' => $id,
											'research_id'=>$researchid
											])
											->execute();
										}
										
										$session = $this->request->session();
			        					$session->write('notepositive', "The record has been saved successfully");
						  				return $this->redirect(['action' => 'index']);
						}
							$session = $this->request->session();
			        		$session->write('notepositive', "The record has been saved successfully");
						  	return $this->redirect(['action' => 'index']);
				}
				
		}
	}
	public function upload()
	{

		if(isset($this->request->data['fileupload'])) 
		{

			$file =$this->request->data['fileupload']; 
			//print_R($file);die;
			$filename=time().'.'.substr(strtolower(strrchr($file['name'], '.')), 1);
			
			$folder =$_SERVER['DOCUMENT_ROOT'].'/webroot/img/uploads/notefiles/'.$filename; 
			if(move_uploaded_file($this->request->data['fileupload']["tmp_name"], $folder)) {
				print_r($filename);die;
			} else {
				echo '#Fail';
			}
		} 
	}
	function uploadcase()
		{
			//pr($this->request->data['casefileupload']);die;
			if(isset($this->request->data['casefileupload'])) 
			{

				$file =$this->request->data['casefileupload']; 
				//print_R($file);die;
				$filename=time().'.'.substr(strtolower(strrchr($file['name'], '.')), 1);
				
				$folder =$_SERVER['DOCUMENT_ROOT'].'/webroot/img/uploads/casestudy/'.$filename; 
				if(move_uploaded_file($this->request->data['casefileupload']["tmp_name"], $folder)) {
					print_r($filename);die;
				} else {
					echo '#Fail';
				}
			} 

		}
		function uploadresearch()
		{
			//pr($this->request->data['casefileupload']);die;
			if(isset($this->request->data['researchfileupload'])) 
			{

				$file =$this->request->data['researchfileupload']; 
				//print_R($file);die;
				$filename=time().'.'.substr(strtolower(strrchr($file['name'], '.')), 1);
				
				$folder =$_SERVER['DOCUMENT_ROOT'].'/webroot/img/uploads/research/'.$filename; 
				if(move_uploaded_file($this->request->data['researchfileupload']["tmp_name"], $folder)) {
					print_r($filename);die;
				} else {
					echo '#Fail';
				}
			} 

		}
		function checkname()
		{
			
			$getjobs = TableRegistry::get('note');
	       	$query = $getjobs->find('all', [
	    		'conditions' => ['name_of_resourse' => $this->request->data['nameofresourse']]
			]);
			$row = $query->first();

			if(count($row)>0)
			{
				echo "1";die;
			}
			else
			{
				echo "0";die;
			}
		}
		public function resetsession()
		{
			$this->autoRender = false;
		    $session = $this->request->session();
	        $session->write('notepositive',"");
	        $session->write('Negative',"");
		}

					

}
?>
