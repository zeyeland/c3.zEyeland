<?php
namespace App\Controller;

use App\Controller\AppController;

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

}
