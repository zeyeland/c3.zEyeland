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
    //Chapter 1: Scene 1 -> Page1
    public function bigBang(){
        
    }
    //Chapter 1: Scene 1.2 -> Page2
    public function newWorld(){

    }
    //Chapter 1: Scene 2 -> Page3
    public function grandSea(){

    }
    //Chapter 1: Scene 3 -> Page4
    public function landOh(){

    }
    //Chapter 1: Scene 3.2 -> Page5
    public function wavesUpBeach(){

    }
    //Chapter 1: Scene 3.3 -> Page6
    public function crossRoads(){

    }
    //Chapter 1: Scene 3.4 -> Page7
    public function crossRoadsCaution(){
        
    }
    //Chapter 1: Scene 3.5 -> Page8
    public function crossRoadsContinued(){
        
    }

}
