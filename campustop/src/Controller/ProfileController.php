<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\CountrysController;
use App\Controller\UsersController;
use App\Controller\ProvinceController;
use App\Controller\CityController;
use App\Controller\ProgramController;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProfileController extends AppController
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
		$this->Auth->allow('index');
		$this->set('userData', $this->Auth->user());
		
		
		
	}
	public function index()
	{
		$id=$this->Auth->user('user_id');

		$articleTable = TableRegistry::get('user_education');
		$education = $articleTable->find()->where(['user_id' => $id])->toArray();

		$articleTable = TableRegistry::get('user_work_experiance');
		$work = $articleTable->find()->where(['user_id' => $id])->toArray();

		$articleTable = TableRegistry::get('user_skills_interest');
		$skill = $articleTable->find()->where(['user_id' => $id])->first();

		
		$getjobsc = TableRegistry::get('countrys');
        $countrys = $getjobsc->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);

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

        $getjobsp = TableRegistry::get('province');
        $province = $getjobsp->find('list', ['keyField' => 'province_id','valueField' => 'province_name']);
        $this->set('province', $province);

        $getjobsc = TableRegistry::get('city');
        $city = $getjobsc->find('list', ['keyField' => 'city_id','valueField' => 'city_name']);
        $this->set('city', $city);

		$getusers = TableRegistry::get('users');
		
		$userdetails = $getusers->newEntity();
		$user = $getusers->get($id);
		$this->set('user', $user);

		$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
		if($existingid!="")
		{
			if($existingid->user_basic_id!="")
            {
                  $profile = $this->Profile->get($existingid->user_basic_id);
                  $this->set('profile', $profile);
            }
            else
            {
            	$this->set('profile', $this->Profile->find('all')->contain(['Province','Countrys','City']));
            }
		}
		else
	    {
	        $this->set('profile', $this->Profile->find('all')->contain(['Province','Countrys','City']));
	    }

 		
 		$this->set('skill', $skill);
 		//pr($work);die;
 		$this->set('work', $work);
 		$this->set('education', $education);
	}
	function add()
	{
		$id=$this->Auth->user('user_id');
		$articlesTable = TableRegistry::get('user_basic');
		$article = $articlesTable->newEntity();
		$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
		if ($this->request->is('post') || $this->request->is('put'))
		{

			$exists = $articlesTable->exists(['user_id' => $id]);
			$article->email_flag = $this->request->data['email_flag'];
			$article->gender = $this->request->data['gender'];
			$article->gender_flag = $this->request->data['gender_flag'];
			$article->country_id=$this->request->data['country_id'];
			$article->country_flag=$this->request->data['country_flag'];
			$article->contact_number=$this->request->data['contact_number'];
			$article->contact_flag=$this->request->data['contact_flag'];

			$article->province_id=$this->request->data['province_id'];
			$article->province_flag=$this->request->data['province_flag'];
			$article->city_id=$this->request->data['city_id'];
			$article->city_flag=$this->request->data['city_flag'];
			$article->timezone=$this->request->data['timezone'];
			$article->timezone_flag=$this->request->data['timezone_flag'];
			$article->zipcode=$this->request->data['zipcode'];
			$article->zipcode_flag=$this->request->data['zipcode_flag'];
			$article->user_id=$this->Auth->user('user_id');
			if (!$existingid)
			{
				if ($articlesTable->save($article)) 
				{
					$users = TableRegistry::get('users');
				  	$query = $users->query();
				 	$query->update()
				     	->set(['fname' => $this->request->data['fname'],'lname' => $this->request->data['lname'],'mname' => $this->request->data['mname']])
						->where(['user_id' => $id])
						->execute();
		    			$id = $article->id;
		    		return $this->redirect(['action' => 'index']);
				 	$this->Flash->success('The profile has been saved', ['key' => 'positive']);
				}
				else
				{
					$this->Flash->error('profile not been saved. Please, try again.');
				}
		}
		else
		{

		 	$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
			   	$users = TableRegistry::get('users');
					  	$query = $users->query();
					 	$query->update()
					      ->set(['fname' => $this->request->data['fname'],'lname' => $this->request->data['lname'],'mname' => $this->request->data['mname']])
    					->where(['user_id' => $id])
    						->execute();
			 

				$query = $articlesTable->query();
					 	$query->update()
					      	->set(['email_flag' => $this->request->data['email_flag'],'gender' => $this->request->data['gender'],'gender_flag' => $this->request->data['gender_flag'],'country_id' => $this->request->data['country_id'],
					      	'country_flag' => $this->request->data['country_flag'],'contact_number' => $this->request->data['contact_number'],'contact_flag' => $this->request->data['contact_flag'],'province_id' => $this->request->data['province_id'],'province_flag' => $this->request->data['province_flag'],'city_id' => $this->request->data['city_id']
					      	,'city_flag' => $this->request->data['city_flag'],'timezone' => $this->request->data['timezone'],'timezone_flag' => $this->request->data['timezone_flag'],'zipcode' => $this->request->data['zipcode']
					      	,'zipcode_flag' => $this->request->data['zipcode_flag']])
    					->where(['user_basic_id' => $existingid->user_basic_id])
    						->execute();

    				$this->Flash->success('The profile has been updated', ['key' => 'update']);
    				return $this->redirect(['action' => 'index']);
		}

					$this->set('profile', $article);		
	}
}

	function profilepic()
		 {

		  $id=$this->Auth->user('user_id');
		  $articlesTable = TableRegistry::get('user_basic');
		  $article = $articlesTable->newEntity();

		  //echo "user".$id;

		  $existingid = $this->Profile->find()->where(['user_id' => $id])->first();

		    

		   if (!empty($this->request->data['profile_pic']['name'])) 
		   {

		   $file = $this->request->data['profile_pic']; 

		   //pr($file);
		   //echo "<br>"."=========";
		   //pr(substr(strtolower(strrchr($file['name'], '.')), 1));
		   //exit;

		    $filename=time().'.'.substr(strtolower(strrchr($file['name'], '.')), 1);

		    $folder = $_SERVER['DOCUMENT_ROOT'].'/webroot/img/uploads/profilepic/'.$filename; 

		    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension 
		    $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
		    
		    if(move_uploaded_file($file['tmp_name'], $folder))
		    {

		     //pr($file);
		   //echo $existingid->user_basic_id."sdsds";
		    //exit;

		     $getFormvalue = $this->Profile->patchEntity($article, $this->request->data);
		    
		     if (!empty($this->request->data['profile_pic']['name'])) 
		     {
		      $getFormvalue ->profile_pic=$filename;
		     }

		     //pr($getFormvalue['profile_pic']);
		     //exit;
		              // echo "ddddddddd";
		     //pr($existingid);die;

		     if (isset($existingid->user_basic_id) != "")
		     {
		      $query = $articlesTable->query();
		      $query->update()
		       ->set(['profile_pic' => $getFormvalue['profile_pic']])
		               ->where(['user_basic_id' => $existingid->user_basic_id])
		                ->execute();

		                //echo "sdsdsds";
		         //die;
		       $this->Flash->success('Your profile has been sucessfully updated.');
		          return $this->redirect(['action' => 'index']);

		      }

		        else 
		        {
		        //$this->Flash->error('Records not be saved. Please, try again.');
		        $query = $articlesTable->query();

		        $query->insert(['user_id','profile_pic'])
		            ->values([
		             'user_id' => $id,
		                'profile_pic' => $getFormvalue['profile_pic'],
		  
		            ])
		            ->execute();
		        }



		    }
		      }
     
 	}
	
	
	function education()
   	{
   		$id=$this->Auth->user('user_id');
   		$id1=0;
		$articlesTable = TableRegistry::get('user_education');
		$article = $articlesTable->newEntity();
	   	if ($this->request->is('post'))
		{
			if($this->request->data['degree_id'])
			{
				//pr($this->request->data);die;
					$article = $articlesTable->query();
					foreach($this->request->data['degree_id'] as $k => $v)
					{
						if($this->request->data['user_education_id'][$k]=="")
						{
							$article->insert(['major_id', 'program_id', 'course_name', 'university_id', 'collage_id','starting_year','ending_year','education_flag','user_id'])
							->values([
							'major_id' => $this->request->data['degree_id'][$k],
							'program_id' => $this->request->data['program_id'][$k], 
							'course_name' => $this->request->data['course_name'][$k],
							'university_id' => $this->request->data['university_id'][$k],
							'collage_id' => $this->request->data['collage_id'][$k],
							'starting_year' => $this->request->data['starting_year'][$k],
							'ending_year' => $this->request->data['ending_year'][$k],
							'education_flag'=>$this->request->data['education_flag'][$k],
							'user_id' => $id
							])
							->execute();
						}
						else
						{
							$article->update()
							      	->set(['major_id' => $this->request->data['degree_id'][$k],
							      			'program_id' => $this->request->data['program_id'][$k],
							      			'course_name' => $this->request->data['course_name'][$k],
							      			'university_id' => $this->request->data['university_id'][$k],
							      			'collage_id' => $this->request->data['collage_id'][$k],
							      			'starting_year' => $this->request->data['starting_year'][$k],
											'ending_year' => $this->request->data['ending_year'][$k],
											'education_flag'=>$this->request->data['education_flag'][$k],
											'user_id' => $id])
		    						->where(['user_education_id' => $this->request->data['user_education_id'][$k]])
		    						->execute();

						}
						$this->Flash->success('The  education profile has been updated', ['key' => 'update']);
						return $this->redirect(['action' => 'index']);
				}
			}		
		}
	}
	function work()
   	{
   		$id=$this->Auth->user('user_id');
		$articlesTable = TableRegistry::get('user_work_experiance');
		$article = $articlesTable->newEntity();
		$i="";
		$existingid = $articlesTable->find()->where(['user_id' => $id])->toArray();

	   	if ($this->request->is('post'))
		{
			//pr(count($existingid));die;

			if (count($existingid) <= 0)
			{

				echo count($this->request->data['company_name']);
				$i=0;
				$k=0;

				//$article = $articlesTable->query();
				for($i=0;$i<count($this->request->data['company_name']);$i++)
				{
					

						$attrdata=[
									'worked_in' => $this->request->data['company_name'][$i],
									'job_was' => $this->request->data['job'][$i], 
									'worked_on' => $this->request->data['worked_on'][$i],
									'work_from' => $this->request->data['work_from'][$i],
									'work_end' => $this->request->data['work_end'][$i],
									'work_experience' => $this->request->data['work_experience'][$i],
									'user_id' => $id,
									'work_flag' => $this->request->data['work_flag'][$i],
								];
								$article->save($attrdata);
				}
				
			}
			else
			{

				$articlesTable->deleteAll(['user_id' => $id]);
				$article = $articlesTable->query();	
				for($k=0;$k<count($this->request->data['company_name']);$k++)
				{
					

				$article->insert(['worked_in', 'job_was', 'worked_on', 'work_from', 'work_end','work_experience','user_id','work_flag'])
				->values([
				'worked_in' => $this->request->data['company_name'][$i],
				'job_was' => $this->request->data['job'][$i], 
				'worked_on' => $this->request->data['worked_on'][$i],
				'work_from' => $this->request->data['work_from'][$i],
				'work_end' => $this->request->data['work_end'][$i],
				'work_experience' => $this->request->data['work_experience'][$i],
				'user_id' => $id,
				'work_flag' => $this->request->data['work_flag'][$i],
				])
				->execute();

				$i++;
				
				}

			}
			$this->Flash->success('The  Work profile has been updated', ['key' => 'update']);
			return $this->redirect(['action' => 'index']);
		}
			
	}
	function addhardskill()
   	{
   		$id=$this->Auth->user('user_id');
   		//echo $this->request->data['hard_skill_flag'];die;
		$articlesTable = TableRegistry::get('user_skills_interest');
		$article = $articlesTable->newEntity();

	   	if ($this->request->is('post'))
		{
			$article->hard_skill = $this->request->data['hardskill'];
			$article->user_id = $id;
			$article->hard_skill_flag=$this->request->data['hard_skill_flag'];
			$exists = $articlesTable->exists(['user_id' => $id]);

			if (!$exists)
			{
				if ($articlesTable->save($article)) 
				{

				}
			}
			else
			{
				$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
				//echo $this->request->data['hard_skill_flag'];die;
					$query = $articlesTable->query();
				 	$query->update()
				      	->set(['hard_skill' => $this->request->data['hardskill'],'user_id' => $id,'hard_skill_flag'=>$this->request->data['hard_skill_flag']])
						->where(['user_id' => $existingid->user_id])
						->execute();
			}
			 $this->Flash->success('The  Skill profile has been updated', ['key' => 'update']);
			return $this->redirect(['action' => 'index']);
		}
			
	}
	function addsoftskill()
   	{
   		$id=$this->Auth->user('user_id');
   		//echo $id;die;
		$articlesTable = TableRegistry::get('user_skills_interest');
		$article = $articlesTable->newEntity();

	   	if ($this->request->is('post'))
		{
			//pr($this->request->data);die;
			$article->soft_skill = $this->request->data['softskill'];
			$article->user_id = $id;
			$article->soft_skill_flag=$this->request->data['soft_skill_flag'];
			$exists = $articlesTable->exists(['user_id' => $id]);

			if (!$exists)
			{
				if ($articlesTable->save($article)) 
				{
					 return $this->redirect(['action' => 'index']);
				}
			}
			else
			{
				$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
				//echo $existingid;die;
					$query = $articlesTable->query();
				 	$query->update()
				      	->set(['soft_skill' => $this->request->data['softskill'],'user_id' => $id,'soft_skill_flag'=>$this->request->data['soft_skill_flag']])
						->where(['user_id' => $existingid->user_id])
						->execute();
				$this->Flash->success('The  Skill profile has been updated', ['key' => 'update']);
				return $this->redirect(['action' => 'index']);
			}
			
		}
			
	}
	function addinterest()
   	{
   		$id=$this->Auth->user('user_id');
   		//echo $id;die;
		$articlesTable = TableRegistry::get('user_skills_interest');
		$article = $articlesTable->newEntity();

	   	if ($this->request->is('post'))
		{
			$article->interest = $this->request->data['interest'];
			$article->user_id = $id;
			$article->interest_flag=$this->request->data['interest_flag'];
			$exists = $articlesTable->exists(['user_id' => $id]);

			if (!$exists)
			{
				if ($articlesTable->save($article)) 
				{

				}
			}
			else
			{
				$existingid = $this->Profile->find()->where(['user_id' => $id])->first();
				//echo $existingid;die;
					$query = $articlesTable->query();
				 	$query->update()
				      	->set(['interest' => $this->request->data['interest'],'user_id' => $id,'interest_flag'=>$this->request->data['interest_flag']])
						->where(['user_id' => $existingid->user_id])
						->execute();
			}
			 $this->Flash->success('The  Skill profile has been updated', ['key' => 'update']);
			return $this->redirect(['action' => 'index']);
		}
			
	}
	function getprovince()
   	{

   			$province = TableRegistry::get('Province');
	       
	        $province = $province->find()->where(['country_id' => $_POST['countryid']])->all();
			echo json_encode($province);
			die;
			
	}
	function getcity()
   	{
		$city = TableRegistry::get('City');
	    $city = $city->find()->where(['province_id' => $_POST['cityid']])->all();
		echo json_encode($city);
		die;
	}
}
?>