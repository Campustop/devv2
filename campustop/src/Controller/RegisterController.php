<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\Controller;
use App\Controller\CountryController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class RegisterController extends AppController
{
	 public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
      
    }

	public function beforeFilter(Event $event)
	{
		$this->Auth->autoRedirect = FALSE;	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('custom');
		
		
	}
	public function index()
	{
		if($this->Auth->user('user_id')!="")
		{
			return $this->redirect(['controller'=>'Home','action' => 'index']);
		}
		else
		{
			
        $getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find()->toArray();
       // pr($countrys);die;
   

        $this->set('country', $countrys);

	        $user = TableRegistry::get('users');
			$register = $user->newEntity();
			
			$this->set('register', $register);
		}
		
	}
	function add()
	{
		$user = TableRegistry::get('users');
		$register = $user->newEntity();
	
		
			  		
		if ($this->request->is('post'))
		{
			//pr($this->request->data);die;
			
			if (!empty($this->request->data)) 
					{
						if(isset($this->request->data['firstname']))
						{
							$existingid = $user->find()->where(['username' => $this->request->data['username']])->first();
							if($existingid=="")
							{
								$register ->fname=$this->request->data['firstname'];
								$register ->lname=$this->request->data['lastname'];
								$register ->mname=$this->request->data['middlename'];
								$register ->username=$this->request->data['username'];
								$register ->password=$this->request->data['password'];
								$register ->role=$this->request->data['role'];
								$register ->country_id=$this->request->data['country'];
							}
							else
							{

								

								$this->Flash->error('User email is already Exists.', ['key' => 'negative1']);

							return $this->redirect(['controller'=>'Register','action' => 'index']);
							}
							
							
						}
						else
						{
							$existingid1 = $user->find()->where(['username' => $this->request->data['username1']])->first();
							if($existingid1=="")
							{
								$register ->fname=$this->request->data['firstname1'];
								$register ->lname=$this->request->data['lastname1'];
								$register ->mname=$this->request->data['middlename1'];
								$register ->username=$this->request->data['username1'];
								$register ->password=$this->request->data['password1'];
								$register ->role=$this->request->data['role1'];
								$register ->country_id=$this->request->data['country1'];
							}
							else
							{
								$this->Flash->error('User email is already Exists.', ['key' => 'negative1']);

							return $this->redirect(['controller'=>'Register','action' => 'index']);
							}
							//echo "hello";die;
							
						}
						
					}
			  		
					if ($userlastid = $user->save($register))
					{

						$userid1 = $userlastid->user_id;

							if(isset($this->request->data['news']))
							{
								if($this->request->data['news']=="on")
								{
									if(isset($this->request->data['username']))
									{
										$username=$this->request->data['username'];
									}
									else
									{
										$username=$this->request->data['username1'];
									}
									$newsletter = TableRegistry::get('newsletter');
									$news = $newsletter->newEntity();
									$news->newslatter_email = $username;
									$news->newslatter_status = 1;
									$newsletter->save($news);
								}
							}

								
							    $encodeuserid = base64_encode($userid1);


                                 $to = $username;
                                    $subject = 'Registration';
                                   $from = 'shenoymy31@gmail.com';
                                   if(isset($this->request->data['role']))
                                   {
                                   		$role = $this->request->data['role'];
	                               }
	                               elseif(isset($this->request->data['role1']))
	                               {
	                               		$role = $this->request->data['role1'];
	                               }
                                   if($role == "4")
                                   {
                                   		$mes = "";
                                   		$username1 = $this->request->data['firstname'];

                                   }
                                   else if ($role == "5")
                                   {
                                   		$mes = "Mr/Ms";
                                   		$username1 = $this->request->data['lastname1'];

                                   }

                                     
                                    // To send HTML mail, the Content-type header must be set
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . '\r\n';

                                    // More headers
                                    $headers .= 'From:'.$from. '\r\n';
                                     
                                    // Compose a simple HTML email message
                                    $message = '<html><body><table style="border:20px solid yellowgreen;">';
                                    $message .= '<tr><td><h3 style="">Hey&nbsp;'.$mes.'&nbsp;'.$username1.'</h3></td></tr>';
                                    $message .= '<tr><td><p style="">Welcome to campustop.</p></td></tr>';
                                    $message .= '<tr><td><p style="">Please click on the link to activate account.</p></td></tr>';
                                    $message .= '<tr><td><a href="'.SITEURL.'register/varify/'.$encodeuserid.'">Verify</a></td></tr>';
                                    $message .= '<tr><td><p style="">Regards,</p></td></tr>';
                                    $message .= '<tr><td><p style="">Akash Agrawal</p></td></tr>';
                                    $message .= '<tr><td><p style="">Co-Founder and CEO AKMYDH Inc. | Campustop.in</p></td></tr>';
                                    
                                    $message .= '</table></body></html>';
                                     
                                    // Sending email
                                   // echo $message;
                                    //die;
                                 
                                    if(mail($to, $subject, $message, $headers)){
                                        
                                           $this->Flash->success('Thank you for registration.Account activation link has been sent to your Email Id', ['key' => 'positive']);
                                    } else{
                                            $this->Flash->success('Unable to send email. Please try again', ['key' => 'negative']);
                                    }

							
							$session = $this->request->session();
        					$session->write('positive', "Thank you for registration.Account activation link has been sent to your Email Id.");
			  				return $this->redirect(['action' => 'index']);
			   		} 
			   		else 
			   		{
			  			$this->Flash->error('Records not be saved. Please, try again.');
			   		}
		}
	}
	function checkmail()
	{
		
		$getjobs = TableRegistry::get('users');
       	$query = $getjobs->find('all', [
    		'conditions' => ['username' => $this->request->data['username']]
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
        $session->write('positive',"");
        $session->write('Negative',"");
	}
	public function varify()
	{
		$this->autoRender = false;

		$string = $_SERVER['REQUEST_URI'];
        $arr = explode("/", $string);

        $decodeuserid = base64_decode($arr[3]);
	



         $user = TableRegistry::get('users');
		 $register = $user->newEntity();

		   $register1exist = $user->find('all')->where(['user_id' => $decodeuserid])->first();
	

		   if($register1exist!="")
		   {

		   			$user1=["user_id"=>$register1exist->user_id,"fname"=>$register1exist->fname,"mname"=>$register1exist->mname,
									"lname"=>$register1exist->lname,"username"=>$register1exist->username,"password"=>$register1exist->password,"user_role_name"=>$register1exist->user_role_name];

					$register1exist->status = 'A';
           // $articles->save($article);
            
		            if ($user->save($register1exist)) 
		            	 
						{
							$this->Auth->setUser($user1);
							$this->Flash->success('Your account has been activated successfully.', ['key' => 'positive
								']);
							return $this->redirect(['controller'=>'Profile','action' => 'index']);

						}
						else
						{
							$this->Flash->success('Account is not activated.Please try again.', ['key' => 'negative']);

							return $this->redirect(['controller'=>'Register','action' => 'index']);
						}

			}
			else
			{
					$this->Flash->success('Account is not activated.Please try again.', ['key' => 'negative']);

					return $this->redirect(['controller'=>'Register','action' => 'index']);
			}

   

	}

	
}
?>
