<?php
namespace App\Controller\admin;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    //...

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Authadmin', [
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'home'
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Authadmin->allow(['index', 'view', 'display','logout']);
       // if (isset($user['role']) && $user['role'] === 'admin') {
            $this->viewBuilder()->layout('adminMain');
         //   return true;
      //  }
       
       // $this->layout = 'adminMain';
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