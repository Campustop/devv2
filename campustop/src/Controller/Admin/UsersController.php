<?php
namespace App\Controller\admin;
use App\Controller\admin\AppController;
use App\Controller\admin\CountrysController;
use App\Controller\admin\ProgramController;

use App\Controller\admin\UserroleController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\App;

class UsersController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->Authadmin->allow('add');
		
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
	        $user = $this->Authadmin->identify();
	        if ($user) {
	            $this->Authadmin->setUser($user);
	            return $this->redirect($this->Authadmin->redirectUrl());
	            
	        }
	        $this->Flash->error(__('Invalid username or password, try again'));
	    }
	}
	public function viewadmin($id = null)
	{

		//echo $id;
		//die;
		$user = TableRegistry::get('Users');
		$user1 = $user->find()->where(['user_id' => $id])->first();
		$this->set('user', $user1);

		$edutable = TableRegistry::get('user_education');
		$education =  $edutable->find('all')->contain(['Program']);

		$this->set('education', $education);

		$worktable = TableRegistry::get('user_work_experiance');
		$work = $worktable->find()->where(['user_id' => $id])->toArray();
		//pr($work);die;
		$this->set('work', $work);

		


		$getjobs5 = TableRegistry::get('countrys');
        $rcountry = $getjobs5->find('list', ['keyField' => 'country_id','valueField' => 'country_name']);
        $this->set('country', $rcountry);

        $getjobs6 = TableRegistry::get('userrole');
        $userrole = $getjobs6->find('list', ['keyField' => 'user_role_id','valueField' => 'user_role_name']);
        $this->set('userrole', $userrole);




	}
	public function logout()
	{
	    return $this->redirect($this->Authadmin->logout());
	}
	public function dashboard()
	{
		//$this->layout = 'adminMain';
		
	}
	public function test()
	{
		echo "hello";
	}
	public function userlist()
	 {

	  $this->set('users', $this->Users->find('all')->contain(['Countrys']));

	  //$useradmins = TableRegistry::get('users');
	  
	       //$noteadmin = $noteadmins->find()->toArray(); 

	       //$this->set('users', $useradmins->find('all')->contain(['Countrys']));




	 }
}
?>