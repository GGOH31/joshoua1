<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PortTypes Controller
 *
 * @property \App\Model\Table\PortTypesTable $PortTypes
 *
 * @method \App\Model\Entity\PortType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $portTypes = $this->paginate($this->PortTypes);

        $this->set(compact('portTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Port Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portType = $this->PortTypes->get($id, [
            'contain' => ['Portfolios'],
        ]);

        $this->set('portType', $portType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portType = $this->PortTypes->newEntity();
        if ($this->request->is('post')) {
            $portType = $this->PortTypes->patchEntity($portType, $this->request->getData());
            if ($this->PortTypes->save($portType)) {
                $this->Flash->success(__('The port type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The port type could not be saved. Please, try again.'));
        }
        $this->set(compact('portType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Port Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portType = $this->PortTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portType = $this->PortTypes->patchEntity($portType, $this->request->getData());
            if ($this->PortTypes->save($portType)) {
                $this->Flash->success(__('The port type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The port type could not be saved. Please, try again.'));
        }
        $this->set(compact('portType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Port Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portType = $this->PortTypes->get($id);
        if ($this->PortTypes->delete($portType)) {
            $this->Flash->success(__('The port type has been deleted.'));
        } else {
            $this->Flash->error(__('The port type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
