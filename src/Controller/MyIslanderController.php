<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * MyIslander Controller
 *
 *
 * @method \App\Model\Entity\MyIslander[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyIslanderController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userFocus = $this->Auth->user();
        $this->set('userFocus', $userFocus);
        
    }

    //this functions should increment the user/player quest level by 1 before redirecting to needed page
    public function questUp($destination){
        //load table
        $usersTable = TableRegistry::get('users');
        //load users from table with $this->Auth->user()['islander_id']
        $user = $usersTable->get($this->Auth->user()['islander_id']); // Return article with id 12
        //add one to questPoints
        $user->quest_points = $user->quest_points + 1;
        //save new user back to table
        $usersTable->save($user);
        
        if($destination === 'landOh'){
            $this->redirect(['controller' => 'Quest', 'action' => 'landOh']);
        }
        
    }

}
