<?php
namespace App\Controller\Backend;

use App\Controller\AppController;


class AdminsController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Abouts');
        $this->loadModel('Contacts');
        $this->loadModel('Porfolios');
        $this->loadModel('Services');
        $this->loadModel('Questions');
        $this->loadModel('Teames');
        $this->loadModel('Users');
        $this->loadModel('Slides');

    
    
    
    }



public function index(){

}



public function creerAbout(){

    $about = $this->Abouts->newEntity();
    if ($this->request->is('post')) {
        //debug($this->request->getData());
        
        $about = $this->Abouts->patchEntity($about, $this->request->getData());
      // debug($about);
   //die();
        if ($this->Abouts->save($about)) {
            $this->Flash->success(__('The about has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The about could not be saved. Please, try again.'));
    }
    $this->set(compact('about'));

}


}