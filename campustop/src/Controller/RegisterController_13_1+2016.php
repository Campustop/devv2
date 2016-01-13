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
	
	        $user = TableRegistry::get('users');
			$register = $user->newEntity();
			
			$this->set('register', $register);
		}
		
	}
	function add()
	{
		$user = TableRegistry::get('users');
		$register = $user->newEntity();


		//$userrole = TableRegistry::get('userrole');
        //$userroledata = $userrole->find()->where(['user_role_name' => $this->request->data['role']])->first();

        //pr($userroledata['']);
        //die;
		
		if ($this->request->is('post'))
		{
			//pr($this->request->data);die;
			if (!empty($this->request->data)) 
					{
						if($this->request->data['firstname']!="")
						{
							
							$register ->fname=$this->request->data['firstname'];
							$register ->lname=$this->request->data['lastname'];
							$register ->mname=$this->request->data['middlename'];
							$register ->username=$this->request->data['username'];
							$register ->password=$this->request->data['password'];
							$register ->role=$this->request->data['role'];
							$register ->country_id=$this->request->data['country'];
							$register ->status="D";

							
						}
						else
						{
							//echo "hello";die;
							$register ->fname=$this->request->data['firstname1'];
							$register ->lname=$this->request->data['lastname1'];
							$register ->mname=$this->request->data['middlename1'];
							$register ->username=$this->request->data['username1'];
							$register ->password=$this->request->data['password'];
							$register ->role=$this->request->data['role1'];
							$register ->country_id=$this->request->data['country1'];
							$register ->status="D";
						}
						
					}
			  
					if ($user->save($register))
					{

						// email to user

						 $to = 'shahnidhi2488@gmail.com';
                                    $subject = 'Password Reset Link';
                                   // $from = 'nidhi.shah@sinelogix.com';
                                     
                                    // To send HTML mail, the Content-type header must be set
                                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                     
                                    // Create email headers
                                    $headers .= 'From: '."nidhi.shah@sinelogix.com"."\r\n".
                                        'Reply-To: '."nidhi.shah@sinelogix.com"."\r\n" .
                                        'X-Mailer: PHP/' . phpversion();
                                     
                                    // Compose a simple HTML email message
                                    $message = '<html><body><table style="border:20px solid yellowgreen;">';
                                  	 $message .= '<tr><td><h3 style="">Hi&nbsp;'.$this->request->data['firstname'].'!</h3></td></tr>';
                                    $message .= '<tr><td><p style="">Your registration is completed succesfully.</p></td></tr>';
                                   // $message .= '<tr><td><a href="'.SITEURL.'forgotpassword/changepassword/'.$encodeuserid.'">Verify</a></td></tr>';
                                    $message .= '<tr><td><p style="">Regards,</p></td></tr>';
                                    $message .= '<tr><td><p style="">Akash Agrawal</p></td></tr>';
                                    $message .= '<tr><td><p style="">Co-Founder and CEO AKMYDH Inc. | Campustop.in</p></td></tr>';
                                    
                                    $message .= '</table></body></html>';
                                     
                                    // Sending email
                                  // echo $message;
                                   // die;
						if($this->request->data['news']!="")
						{
							if($this->request->data['news']=="on")
							{
								$newsletter = TableRegistry::get('newsletter');
								$news = $newsletter->newEntity();
								$news->newslatter_email = $this->request->data['username'];
								$news->newslatter_status = 1;
								$newsletter->save($news);
							}
						}
							
			  		 	$this->Flash->success('The user has been saved', [
						    'key' => 'positive',
						]);
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
		echo $this->request->data['username'];die;
		$getjobs = TableRegistry::get('users');
       	$query = $articles->find('all', [
    		'conditions' => ['username' => $this->request->data['username']]
		]);
		$row = $query->first();
		
	}
}
?>