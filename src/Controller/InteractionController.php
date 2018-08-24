<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * InteractionController Controller
 *
 *
 * @method \App\Model\Entity\InteractionController[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InteractionController extends AppController
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
        $thisUser = $this->Auth->user();
        $this->set('thisUser', $thisUser);
        //debug($thisUser);
        $this->redirect(['controller' => 'Interaction', 'action' => 'theKraken']);
        
    }

    public function theKraken(){

    }

    public function crashedShip(){

    }

    public function flyingPig(){
        //load table
        $usersTable = TableRegistry::get('users');
        //load users from table with $this->Auth->user()['islander_id']
        $user = $usersTable->get($this->Auth->user()['islander_id']); // Return article with id 12
        //get users questPoints
        $userQuestPoints = $user->quest_points;
        $this->set('userQuestPoints', $userQuestPoints);
    }

    public function surfingStevie(){
        //load table
        $usersTable = TableRegistry::get('users');
        //load users from table with $this->Auth->user()['islander_id']
        $user = $usersTable->get($this->Auth->user()['islander_id']); // Return article with id 12
        //get users questPoints
        $userQuestPoints = $user->quest_points;
        $this->set('userQuestPoints', $userQuestPoints);
    }

    public function hotbirdBette(){
        
    }

    public function chuckSimpson(){
        //load table
        $usersTable = TableRegistry::get('users');
        //load users from table with $this->Auth->user()['islander_id']
        $user = $usersTable->get($this->Auth->user()['islander_id']); // Return article with id 12
        //get users questPoints
        $userQuestPoints = $user->quest_points;
        $this->set('userQuestPoints', $userQuestPoints);
    }


}
