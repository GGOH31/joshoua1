<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teames Controller
 *
 * @property \App\Model\Table\TeamesTable $Teames
 *
 * @method \App\Model\Entity\Teame[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $teames = $this->paginate($this->Teames);

        $this->set(compact('teames'));
    }

    /**
     * View method
     *
     * @param string|null $id Teame id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teame = $this->Teames->get($id, [
            'contain' => [],
        ]);

        $this->set('teame', $teame);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teame = $this->Teames->newEntity();
        if ($this->request->is('post')) {
            $teame = $this->Teames->patchEntity($teame, $this->request->getData());
            if ($this->Teames->save($teame)) {
                $this->Flash->success(__('The teame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teame could not be saved. Please, try again.'));
        }
        $this->set(compact('teame'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Teame id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teame = $this->Teames->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teame = $this->Teames->patchEntity($teame, $this->request->getData());
            if ($this->Teames->save($teame)) {
                $this->Flash->success(__('The teame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teame could not be saved. Please, try again.'));
        }
        $this->set(compact('teame'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Teame id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teame = $this->Teames->get($id);
        if ($this->Teames->delete($teame)) {
            $this->Flash->success(__('The teame has been deleted.'));
        } else {
            $this->Flash->error(__('The teame could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
