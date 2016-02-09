<?php
namespace App\Controller\Admin;
use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class TestinomialsController extends AppController
{
	public function beforeFilter(Event $event)
	{	
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('adminMain');
		$this->Authadmin->deny(['add', 'edit','delete']);
	}
	public function index()
    {
		$this->set('testinomial', $this->Testinomials->find());
    }
	
	public function add()
	{
		$record = TableRegistry::get('testinomials');
        $testinomial = $record->newEntity($this->request->data());

		if (!empty($this->request->data)) 
		{
			if (!empty($this->request->data['t_image']['name'])) 
			{
				$file = $this->request->data['t_image']; 
				$filename=time().'.'.substr(strtolower(strrchr($file['name'], '.')), 1);

				$folder = $_SERVER['DOCUMENT_ROOT'].'/cakephp3/webroot/img/uploads/testinomials/'.$filename; 

				$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
				$arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
				
				if(move_uploaded_file($file['tmp_name'], $folder))
				{

					$getFormvalue = $this->Testinomials->patchEntity($testinomial, $this->request->data);
				
					if (!empty($this->request->data['t_image']['name'])) 
					{
						$getFormvalue ->t_image=$filename;
					}
			           
					//pr($getFormvalue);die;
					if ($this->Testinomials->save($getFormvalue))
					{
			  		 	$this->Flash->success('Your profile has been sucessfully updated.');
			   			return $this->redirect(['controller' => 'Testinomials', 'action' => 'index']);
			   		} 
			   		else 
			   		{
			  			$this->Flash->error('Records not be saved. Please, try again.');
			   		}
				}
    		}
    	}
    
	
		$this->set('testinomial', $testinomial);
	}

	public function edit($id = null)
	{
    	$testinomial = $this->Testinomials->get($id);
    	if ($this->request->is(['post', 'put']))
    	{
        	$this->Testinomials->patchEntity($testinomial, $this->request->data);
        	if ($this->Testinomials->save($testinomial)) 
        	{
            	$this->Flash->success(__('Your Testinomial has been updated.'));
            	return $this->redirect(['action' => 'index']);
        	}
        $this->Flash->error(__('Unable to update your Testinomial.'));
    	}
   		$this->set('testinomial', $testinomial);
	}

public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $countrys = $this->Testinomials->get($id);
    if ($this->Testinomials->delete($countrys)) {
        $this->Flash->success(__('The Testinomial with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
	
	
}
?>