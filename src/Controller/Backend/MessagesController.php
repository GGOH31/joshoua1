<?php
namespace App\Controller\Backend;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;


/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }



    public function index()
    {
        $messages = $this->paginate($this->Messages);

        $this->set(compact('messages'));
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => [],
        ]);

        $this->set('message', $message);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->autoRender=false;
        $this->viewBuilder()->setLayout("ajax");
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            //$client=$this->request->getData();
           
            //$this->__makeJason(1,"success",$client);
           

            $message = $this->Messages->patchEntity($message, $this->request->getData());
            
            

            if ($this->Messages->save($message)) {
              /*  $clients = $this->Messages
                ->find()
                ->where(['email' =>$message['email']])->toArray();
                $name=$clients*/
                
/*Email::configTransport('mailtrap', [
                    'host' => 'smtp.mailtrap.io',
                   'port' => 2525,
                    'username' => '68518a216b9038',
                   'password' => 'fd232ae2cb7588',
                   'className' => 'Smtp'
               ]); */
             
                // debug( $contact['name']);
                  //die();
                 // $client = $this->Messages->get($name);
           
                   $sendmail = new Email('default');
           //$sendmail->setTransport('mailtrap');//a commenter
            $sendmail->viewBuilder()->setTemplate('accuser');
            $sendmail->viewBuilder()->setLayout( 'custom');
                   $sendmail->setEmailFormat('html');
                   $sendmail->setviewVars([
                     'client' => $message['name'],
                    
                   ]);
                   $sendmail->setFrom(['infos@joshuaconsultng.com' => 'JOSHUA']);
                   $sendmail->setTo($message['email']);
                   $sendmail->setSubject('JOSHUA');
                   $sendmail->send();

                   return $this->response->withType('application/json')->withStringBody(json_encode('Votre  message a été envoyer avec succès'));
                  // return $this->response;
                   /*$resultJ= \json_encode('Votre  message a été envoyer avec succès');
                   $this->response->getType('json');
                       $this->response->withbody($resultJ);
                           return $this->response;*/
                  // $stream = new Stream('Votre  message a été envoyer avec succès');
              


           //  return $this->redirect('/');
            }
           // $this->error(__('The message could not be saved. Please, try again.'));
            
            
            //return $this->redirect('/');
        }

        $this->set(compact('message'));
    }
    





    public function envoiedemail($name = null )
    {

         //a commenter
    Email::configTransport('mailtrap', [
         'host' => 'smtp.mailtrap.io',
        'port' => 2525,
         'username' => '68518a216b9038',
        'password' => 'fd232ae2cb7588',
        'className' => 'Smtp'
    ]); 
       
     // debug( $contact['name']);
       //die();
       $client = $this->Messages->get($name);

        $sendmail = new Email('default');
       $sendmail->setTransport('mailtrap');//a commenter
        $sendmail->template('accuser', 'custom');
        $sendmail->setEmailFormat('html');
        $sendmail->setviewVars([
          'client' => $client,
         
        ]);
        $sendmail->setFrom(['infos@joshuaconsultng.com' => 'JOSHUA']);
        $sendmail->setTo('infos@joshuaconsultng.com');
        $sendmail->setSubject('JOSHUA');
        $sendmail->send();
      
    }










    private function __makeJason($result,$message,$data)
    {
        $resultJ= \json_encode(array('result'=>$result,'message'=>$message,'data'=>$data));
          $this->response->type('json');
            $this->response->body($resultJ);
                return $this->response;
    }
    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
