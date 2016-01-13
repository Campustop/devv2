<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\UsersController;
use App\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

class ChangepasswordController extends AppController
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

		$this->viewBuilder()->layout('user_profile');
	}



    /*public function index()
    {

        $users = TableRegistry::get('users');
        $user =$users->get($this->Auth->user('user_id'));

        $this->set('id',$this->Auth->user('user_id'));
        $this->set('currentpassword',$user->password);
        if (!empty($this->request->data)) {
            $user = $users->patchEntity($user, [
                    'oldpassword'  => $this->request->data['oldpassword'],
                    'password'      => $this->request->data['password'],
                   
                    'reg_cpwd'     => $this->request->data['reg_cpwd']
                ],
                ['validate' => 'password']
            );
            if ($users->save($user)) {
                $this->Flash->success('The password is successfully changed');
                
            } else {
                $this->Flash->error('There was an error during the save!');
            }
        }
        $this->set('user',$user);
    }*/
     public function index()
    {
        $getjobs = TableRegistry::get('countrys');
        $countrys = $getjobs->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $countrys);

        $users = TableRegistry::get('users');
        //$register = $user->newEntity();
        $changepassword = $users->newEntity();
        $this->set('changepassword', $changepassword);

        $id = $this->Auth->user('user_id');
       

        if ($this->request->is(['post'])) {
           $users->patchEntity($changepassword, $this->request->data);
            //echo $this->request->data['password'];
            //die();
            
           //pr($this->request->data['password']);
           //echo "";

           $users = TableRegistry::get('users');
                    $userdata = $users->find()->where(['user_id' => $id])->first();

            /* if($this->request->data['password'] == $this->request->data['oldpassword'])
           
           {
                 $this->Flash->success('Your old Password and current passowrd should not be same.', ['key' => 'update']);
                // die;
           }*/
           
           if($this->request->data['password'] == $this->request->data['reg_cpwd'])
           {
                    $password = (new DefaultPasswordHasher)->hash($this->request->data['password']);

                if ((new DefaultPasswordHasher)->check($this->request->data['oldpassword'], $userdata->password)) 

                    {
                            // echo "newpassword-----------";
                             //pr($this->request->data['oldpassword']);
                             //echo "alreasyesist-----------";
                           // pr($userdata->password);
                           // die;
                            $query = $users->query();
                            $query->update()
                            ->set(['password' => $password])
                            ->where(['user_id' => $id])
                            ->execute();
                                                
                                                

                            $this->Flash->success('Your Password has been Updated successfully', ['key' => 'positive']);
                    }
                    else
                    {
                        $this->Flash->success('Your old Password is not match with current old password.', ['key' => 'update']);
                    }
                   

                   
           }
          
           else{
               
            $this->Flash->success('We will be unable to update your password if you can’t match your “New Password” with “Confirm New Password.', ['key' => 'update']);
           }
           
            /*echo $row->password = $this->request->data['password'];
            echo "<br/>";
            echo $x = sha1($row->password);
            echo "<br/>";
            sha1($x);
            die();*/

        }
        //$this->set('users', $users);
    } 



}
?>