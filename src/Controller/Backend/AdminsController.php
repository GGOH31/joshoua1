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
        $this->loadModel('Messages');
        $this->loadModel('Teames');
        $this->loadModel('Users');
        $this->loadModel('Slides');

    
    
    
    }



public function index(){
    $messages = $this->Messages->find('all')->toArray();
    
    $messTotal= count($messages);
    $messageslu = $this->Messages->find('all')
                       -> where(['lu'=>0])->toArray();
     $messagesluTotal= count($messageslu);
     $messagesvu = $this->Messages->find('all')
     -> where(['lu'=>1])->toArray();
$messagesvuTotal= count($messagesvu);

    $this->set(compact('messages','messTotal','messagesluTotal','messagesvuTotal'));


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