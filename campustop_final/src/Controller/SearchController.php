<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Controller\NoteController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class SearchController extends AppController
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
		$this->autoRender = false;

		parent::beforeFilter($event);
		$this->viewBuilder()->layout('custom');
		$this->Auth->allow(['add','index','getfeedback']);
		//$this->Auth->allow('index','add');
		$this->set('userData', $this->Auth->user());
		
		
		
	}
	public function index()
	{
		
//
		$name = $_POST['name'];
		$progid =  $_POST['progid'];

		$notelistTable = TableRegistry::get('note');

		if($progid != "")
		{
        $notelist = $notelistTable->find()->where(['name_of_resourse LIKE' => '%'.$name.'%','program_id' => $progid])->toArray();
    	}
    	else
    	{
    		$notelist = $notelistTable->find()->where(['name_of_resourse LIKE' => '%'.$name.'%'])->toArray();
    	}
       
       echo '<ul class="list-group" style="position: relative;">';

        foreach($notelist as $notelist1) 
						 {
							?>
						
						<li  onclick='fill("<?php echo $notelist1->name_of_resourse;?>")' class='list-group-item'><a href="<?php echo SITEURL?>notedetails/index/<?php echo $notelist1->note_id;?>"><span style="color:#ff6100"><?php echo $notelist1->name_of_resourse;?></span></a></li>
						
						<?php
						}
						echo '</ul>';
		}
						
		



	

	
					

}
?>