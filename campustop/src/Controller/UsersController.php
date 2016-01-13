<?php
namespace App\Controller;
define('FACEBOOK_SDK_V4_SRC_DIR','../vendor/Facebook/');
require_once('../vendor/Facebook/autoload.php');
require_once('../vendor/Facebook/Helpers/FacebookRedirectLoginHelper.php');
require_once('../vendor/Facebook/FacebookSession.php');


require_once(ROOT.DS.'vendor' . DS  . 'Facebook'.DS. 'Authentication'.DS. 'OAuth2Client.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Client.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Config.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Model.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Collection.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Service.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Service'.DS. 'Oauth2.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'Utils.php');
require_once(ROOT.DS.'vendor' . DS  . 'Google'.DS. 'autoload.php');


use App\Controller\AppController;
use Cake\Core\App;
use Google_Client;
use Google_Service_Oauth2;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Facebook\FacebookSession;

use Facebook\Helpers\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;



class UsersController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->Auth->allow('add');
		
	}
	public function index()
	{
		$this->set('users', $this->Users->find('all'));
	}
	
	public function view($id)
	{
		$user = $this->Users->get($id);
		$this->set(compact('user'));
	}
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post'))
		{
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) 
			{
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'add']);
			}
			$this->Flash->error(__('Unable to add the user.'));
		}
		$this->set('user', $user);
	}
	public function login()
	{
		$this->viewBuilder()->layout('adminlogin');
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify();
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	            
	        }
	        $this->Flash->error(__('Invalid username or password, try again'));
	    }
	}

	public function logout()
	{
	    return $this->redirect($this->Auth->logout());
	}
	public function dashboard()
	{
		//$this->layout = 'adminMain';
		
	}
	public function test()
	{
		echo "hello";
	}
	
	public function fblogin()
	{
		$this->autoRender = false;
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}

		FacebookSession::setDefaultApplication('491776471001011', '2383aae6c102275bafd2ff7f118d988f');
		$helper = new FacebookRedirectLoginHelper('http://localhost/cakephp3/users/fb_login');
		$url = $helper->getLoginUrl('http://localhost/cakephp3/users/fb_login',array('email'));
		$this->redirect($url);
	
	}
	public function fb_login()
	{
		pr($POST);
		die;
	
}
	public function googlelogin()
	{
	session_start(); //session start

		//Insert your cient ID and secret 
		//You can get it from : https://console.developers.google.com/
		$client_id = '528614741203-f9m22k7jltgmn8k16ifol3818i5j6625.apps.googleusercontent.com'; 
		$client_secret = 'Jg97cNc9xJZwoI1m0Ib00pcE';
		$redirect_uri = 'http://localhost/cakephp3/users/googlelogin'; 

		//database

		//incase of logout request, just unset the session var
		if (isset($_GET['logout'])) {
		  unset($_SESSION['access_token']);
		}

		/************************************************
		  Make an API request on behalf of a user. In
		  this case we need to have a valid OAuth 2.0
		  token for the user, so we need to send them
		  through a login flow. To do this we need some
		  information from our API console project.
		 ************************************************/
		$client = new Google_Client();
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->addScope("email");
		$client->addScope("profile");

		//pr($client);
		//die;

		/************************************************
		  When we create the service here, we pass the
		  client to it. The client then queries the service
		  for the required scopes, and uses that when
		  generating the authentication URL later.
		 ************************************************/
		$service = new Google_Service_Oauth2($client);                  

		/************************************************
		  If we have a code back from the OAuth 2.0 flow,
		  we need to exchange that with the authenticate()
		  function. We store the resultant access token
		  bundle in the session, and redirect to ourself.
		*/
		  
					if (isset($_GET['code'])) {

					  $client->authenticate($_GET['code']);
					  $_SESSION['access_token'] = $client->getAccessToken();
					  header('Location:'.filter_var($redirect_uri, FILTER_SANITIZE_URL));
					  exit;
					}

		/************************************************
		  If we have an access token, we can make
		  requests, else we generate an authentication URL.
		 ************************************************/
				if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {

				  $client->setAccessToken($_SESSION['access_token']);
				} else {
	
				  $authUrl = $client->createAuthUrl();
				}


						if (isset($authUrl)){ 
							//show login url
							
							return $this->redirect($authUrl);
							
						
							
						} else {
							
							$user = $service->userinfo->get(); //get user info 

							//echo "<pre>";
							//pr($user);
							//echo "hellllo i am here";

							$useradd = $this->Users->newEntity();

							//echo $existingemail = $this->Users->find()->where(['username' => $user->email])->first();

							///if($existingemail->user_id!="")
							//{
							$userTable = TableRegistry::get('users');
        
      						 $password = $userTable->generateRandomString();
							$useradd->fname=$user->givenName;
							$useradd->lname=$user->familyName;
							$useradd->mname=$user->givenName;
							$useradd->username=$user->email;
							$useradd->password=md5($password);


							if ($useradd1 = $this->Users->save($useradd))
							{


								echo $useridlastinsert = $useradd1->user_id;
								//echo "sdfsdfdf";
								//die;

								$social = TableRegistry::get('social_acount_info');

								$query = $social->query();

								$query->insert(['user_id','id', 'profile_link', 'gender', 'user_name', 'profile_image', 'name', 'fname', 'lname', 'age', 'email', 'date_of_birth', 
									'hometown', 'city','m_status','user_website','user_occupation','skill','work_exp','varified','about'])
								    ->values([
								    	'user_id' => $useridlastinsert,
								        'id' => $user->id,
								        'profile_link' => $user->link,
								        'gender' => $user->gender,
								        'user_name' => $user->name,
								        'profile_image' => $user->picture,
								        'name' => $user->name,
								        'fname' => $user->givenName,
								        'lname' => $user->familyName,
								        'age' => '',
								        'email' => $user->email,
								        'date_of_birth' => '',
								        'hometown' => '',
								        'city' => '',
								        'm_status' => '',
								        'user_website' => '',
								        'user_occupation' => '',
								        'skill' => '',
								        'work_exp' => '',
								        'varified' => $user->verifiedEmail,
								        'about' => ''

								        
								    ])
								    ->execute();

								    echo "";


								   $this->Flash->success('The user has been saved', [
									    'key' => 'positive',
									]);

						    		return $this->redirect(['controller' => 'register', 'action' => 'index']);
						

								    //$file['tmp_name'] = $file;

								    //$file['name'] = $file;

									//pr($file);
									//echo "<br>"."=========";
									//pr(substr(strtolower(strrchr($file['name'], '.')), 1));
									//exit;
									//$path = "$_SERVER['DOCUMENT_ROOT'].'/cakephp3/webroot/img/uploads/facebook/";
						//file_put_contents( 'http://localhost/cakephp3/webroot/img/uploads/facebook/' . $_SERVER['HTTP_X_FILENAME'], $file );


							//$user ->role=$user->picture;
							//$user ->country_id=$user->picture;
							
							
							//show user picture
							//echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';

							//echo "sdfsdfdsf";

							//echo '<input type="text" id="jsonedata" name="jsonedata" value="'.$jsondata.'"/>';

							//header('http://localhost/cakephp3/register/googlelogin/'.$jsondata);
							//die;

						 }
						 else
						 {
						 	//$this->Flash->error('This email is already exist or you have not filled all data.Records not be saved. Please, try again.');
						 	   $this->Flash->error('The redord has not been saved', ['key' => 'negative']);

						    		return $this->redirect(['controller' => 'register', 'action' => 'index']);
						 }

						
						//echo '</div>';
					}


//Display user info or display login url as per the info we have.
//echo '<div style="margin:20px">';
//die;


}

	public function googleloginfn()
	{

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

		//Insert your cient ID and secret 
		//You can get it from : https://console.developers.google.com/
		$client_id = '528614741203-f9m22k7jltgmn8k16ifol3818i5j6625.apps.googleusercontent.com'; 
		$client_secret = 'Jg97cNc9xJZwoI1m0Ib00pcE';
		$redirect_uri = 'http://localhost/cakephp3/users/googleloginfn'; 

		//database

		//incase of logout request, just unset the session var
		if (isset($_GET['logout'])) {
		  unset($_SESSION['access_token']);
		}

		/************************************************
		  Make an API request on behalf of a user. In
		  this case we need to have a valid OAuth 2.0
		  token for the user, so we need to send them
		  through a login flow. To do this we need some
		  information from our API console project.
		 ************************************************/
		$client = new Google_Client();
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->addScope("email");
		$client->addScope("profile");

		//pr($client);
		//die;

		/************************************************
		  When we create the service here, we pass the
		  client to it. The client then queries the service
		  for the required scopes, and uses that when
		  generating the authentication URL later.
		 ************************************************/
		$service = new Google_Service_Oauth2($client);                  

		/************************************************
		  If we have a code back from the OAuth 2.0 flow,
		  we need to exchange that with the authenticate()
		  function. We store the resultant access token
		  bundle in the session, and redirect to ourself.
		*/
		  
					if (isset($_GET['code'])) {

					  $client->authenticate($_GET['code']);
					  $_SESSION['access_token'] = $client->getAccessToken();
					  header('Location:'.filter_var($redirect_uri, FILTER_SANITIZE_URL));
					  exit;
					}

		/************************************************
		  If we have an access token, we can make
		  requests, else we generate an authentication URL.
		 ************************************************/
				if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {

				  $client->setAccessToken($_SESSION['access_token']);
				} else {
	
				  $authUrl = $client->createAuthUrl();
				}


						if (isset($authUrl)){ 
							//show login url
							
							return $this->redirect($authUrl);
							
						
							
						} else {
							
							$user = $service->userinfo->get(); //get user info 

							//echo "<pre>";
							pr($user);
							echo "hellllo i am here";

							$useradd = $this->Users->newEntity();

						$existingemail = $this->Users->find()->where(['username' => $user->email])->first();
						

        				if(isset($existingemail))
						
						{

								$user=array("user_id"=>$existingemail->user_id,"fname"=>$existingemail->fname,"mname"=>$existingemail->mname,
									"lname"=>$existingemail->lname,"username"=>$existingemail->username,"password"=>$existingemail->password,"user_role_name"=>$existingemail->user_role_name);

								

								 if ($user) 
								        {
								            $this->Auth->setUser($user);
											
											
								           return $this->redirect(['controller'=>'register','action' => 'index']);
								        }
								        else
								        {
								        $this->Flash->error('Invalid username or password, try again', ['key' => 'negative']);
								        
								        return $this->redirect(['controller'=>'register','action' => 'index']);
								    }
						}
						else
						{
								 $this->Flash->error('Invalid username or password, try again', ['key' => 'negative']);
								        
								        return $this->redirect(['controller'=>'register','action' => 'index']);

						}
											
						//echo '</div>';
					}


//Display user info or display login url as per the info we have.
//echo '<div style="margin:20px">';
//die;


}
}
?>