<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\UsersController;
use App\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\Mailer\Email;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;


class ForgotpasswordController extends AppController
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
        $this->Auth->allow(['index', 'changepassword']);
	}

	public function index()
    {
    	$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);
		
		
		$userobj = TableRegistry::get('users');
		$users = $getjobs->find('list', ['keyField' => 'user_id','valueField' => 'fname']);
		$this->set('user1', $users);
		//echo "asdsad";
		//die;
        if ($this->request->is('post'))
        {
            //pr($this->request->data);die;
            if (!empty($this->request->data)) 
            {
                if($this->request->data['forgot_email']!="")
                {
                    $forgot_email = $this->request->data['forgot_email'];

                    
                    $row = $userobj->find()->where(['username' => $this->request->data['forgot_email']])->first();
                    
                    $changepassword = $userobj->newEntity();
                                    

                    //pr($exist);

                    if($row!=""){
                        $userid = $row['user_id'];
                        $username = $row['fname'];
                        $encodeuserid = base64_encode($userid);
                        //$encodeuserid =Security::encrypt($userid, Security::salt());

                        //------Send Passsword Reset Link------//
                        /*
                            $res = $email->from($admin)
                              ->to($forgot_email)
                              ->subject('Password Reset Link')
                              ->message('Your Password reset link is:- $this->Html->link(http://www.campustop.in/forgotpassword/changepassword/$userid)')
                              ->send($this->request->data['message']);
                        */  

                             /* $email = new Email('default');
                              $email->from(['nidhi.shah@sinelogix.com' => 'campustop'])
                                ->to('shahnidhi2488@gmail.com')
                                ->subject('Password Reset Link')
                                ->message('Your Password reset link is:- $this->Html->link(http://www.campustop.in/forgotpassword/changepassword/$encodeuserid)')
                                 ->send('tis is for test');


                                 mail("someone@example.com","My subject",$msg);*/

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
                                    $message .= '<tr><td><h3 style="">Hi&nbsp;'.$username.'!</h3></td></tr>';
                                    $message .= '<tr><td><p style="">Please click on the link to change password.</p></td></tr>';
                                    $message .= '<tr><td><a href="'.SITEURL.'forgotpassword/changepassword/'.$encodeuserid.'">Verify</a></td></tr>';
                                    $message .= '<tr><td><p style="">Regards,</p></td></tr>';
                                    $message .= '<tr><td><p style="">Akash Agrawal</p></td></tr>';
                                    $message .= '<tr><td><p style="">Co-Founder and CEO AKMYDH Inc. | Campustop.in</p></td></tr>';
                                    
                                    $message .= '</table></body></html>';
                                     
                                    // Sending email
                                   echo $message;
                                    die;
                                    if(mail($to, $subject, $message, $headers)){
                                        echo 'Your mail has been sent successfully.';
                                    } else{
                                        echo 'Unable to send email. Please try again.';
                                    }


                        $this->Flash->success('Password reset link has been sent to your Email Id', ['key' => 'positive']);


                    }else{
                        $this->Flash->error('E-mail Id does not exists', ['key' => 'negative']);
                    }
                }else{
                    $this->Flash->error('Please Enter E-mail Id', ['key' => 'negative']);
                }
            }
            else{
                $this->Flash->error('Please, try again.');
            }
        }
    }


    public function changepassword()
    {
        //print_r($_GET['ÑDh']);
        //$userid = Security::decrypt('222c3aca8defbdc7532058466b7337a8c983aaebfd6238be53ea6fc963571163%13JEÞ2O%13þY¹Vôók%7D1gô¦WÑ%7Fò%0Ek%0F?]%D1D%16h', Security::salt());
        $string = $_SERVER['REQUEST_URI'];
        $arr = explode("/", $string, 5);
        //print_r($arr[4]);

        //echo $this->params['url']['id2'];
         $decodeuserid = base64_decode($arr[4]);
   

    	$getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);

        $users = TableRegistry::get('users');
		//$register = $user->newEntity();
    	$changepassword = $users->newEntity();
    	$this->set('changepassword', $changepassword);

        $row = $this->Auth->user('user_id');
        //$userid = $this->Users->get($id);
        //var_dump($row);
        //echo $row['user_id'];
        //echo $row->password;
        //echo "<br/>";


        if ($this->request->is(['post'])) {
            //$users->patchEntity($changepassword, $this->request->data);
            //echo $this->request->data['password'];
            //die();
         
            /*echo $row->password = $this->request->data['password'];
            echo "<br/>";
            echo $x = sha1($row->password);
            echo "<br/>";
            sha1($x);
            die();*/

            $users1 = $users->find('all')->where(['user_id' => $decodeuserid])->first();

       
            

            //$password = (new DefaultPasswordHasher)->hash($this->request->data['password']);

            $users1->password = $this->request->data['password'];
           // $articles->save($article);
            
            if ($users->save($users1)) 
            {
                $this->Flash->success('Your Password has been Updated successfully', ['key' => 'update']);
                //return $this->redirect(['action' => '../users/login']);
            }
            else{
                $this->Flash->error('The record has not been updated', ['key' => 'negative']);
            }
        }
        //$this->set('users', $users);
    }
}
?>