<?php
namespace App\Controller;

use App\Controller\AppController;

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
        
    }

    public function surfingStevie(){
        
    }

    public function hotbirdBette(){
        
    }

    public function chuckSimpson(){
        
    }


}
