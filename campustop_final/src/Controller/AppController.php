<?php
namespace App\Controller;

require_once('../vendor/Facebook/autoload.php');
require_once('../vendor/Facebook/Helpers/FacebookRedirectLoginHelper.php');
require_once('../vendor/Facebook/FacebookSession.php');

require_once('../vendor/Facebook/Facebook.php');

use Facebook\Facebook;

use Facebook\Helpers\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\App;


class AppController extends Controller
{
    //...

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie',['httpOnly' => true]);
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Home',
                'action' => 'index',
               
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index','addnotedetails', 'view', 'display','logout','getrate','getfeedback','checkmail','email','setcountry','resetsession','varify','subscribenewsletter','fblogin', 'fb_login','googlelogin','add','social_acount_info','googleloginfn','ratingcal','gridlist','notlistfree','notelistpr','gridlistfree','notelistpr','gridlistfree','gridlistpr','gridlistpr','notfound']);
        $this->set('user', $this->Auth->user());

       
        $cookie=$this->Cookie->read('RememberMe');
        $this->set('cookie', $cookie);
        $userdata = $this->Auth->user();
        $basicTable = TableRegistry::get('user_basic');
        $basic = $basicTable->find()->where(['user_id' => $userdata['user_id']])->first();
        $session = $this->request->session();
        $session->write('userpic1', $basic['profile_pic']);

      $getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find()->toArray();
       // pr($countrys);die;
        $this->set('country', $countrys);

        $programTable = TableRegistry::get('program');
        $programs = $programTable->find('list', ['keyField' => 'program_id','valueField' => 'pro_name']);
        $this->set('program', $programs);

       
    }
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

    //...
}
?>
