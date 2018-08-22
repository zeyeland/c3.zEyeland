<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MyIslander Controller
 *
 *
 * @method \App\Model\Entity\MyIslander[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestController extends AppController
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
        $this->redirect(['controller' => 'Quest', 'action' => 'bigBang']);
        
    }
    //Chapter 1: Scene 1
    public function bigBang(){
        
    }
    //Chapter 1: Scene 1.2
    public function newWorld(){

    }
    //Chapter 1: Scene 2
    public function grandSea(){

    }
    //Chapter 1: Scene 3
    public function landOh(){

    }
    //Chapter 1: Scene 3.2
    public function wavesUpBeach(){

    }
    //Chapter 1: Scene 3.3
    public function crossRoads(){

    }
    //Chapter 1: Scene 3.4
    public function crossRoadsCaution(){
        
    }
    //Chapter 1: Scene 3.5
    public function crossRoadsContinued(){
        
    }

}
