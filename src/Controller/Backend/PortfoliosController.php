<?php
namespace App\Controller\Backend;

use App\Controller\AppController;

/**
 * Portfolios Controller
 *
 * @property \App\Model\Table\PortfoliosTable $Portfolios
 *
 * @method \App\Model\Entity\Portfolio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortfoliosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
           // 'contain' => ['PortTypes'],
        ];
        $portfolios = $this->paginate($this->Portfolios);

        $this->set(compact('portfolios'));
    }

    /**
     * View method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portfolio = $this->Portfolios->get($id, [
           // 'contain' => ['PortTypes'],
        ]);

        $this->set('portfolio', $portfolio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portfolio = $this->Portfolios->newEntity();
        if ($this->request->is('post')) {
            $image=$this->request->getData('image');
            
            $extensions = array('.png', '.gif', '.jpg', '.jpeg');
            $extension = strrchr($image['name'], '.');
            $taille_maxi = 1000000;
            $taille = filesize($image['tmp_name']);
            //debug($image);
           
           
            if (!in_array($extension, $extensions)) {
                $this->Flash->error(__('Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...'));
                return $this->redirect(['action' => 'add']);
                # code...
            }
            if($taille>$taille_maxi)
{
    $this->Flash->error(__('Le fichier est trop gros...'));
    return $this->redirect(['action' => 'add']);
}
            
            $portfolio = $this->Portfolios->patchEntity($portfolio, $this->request->getData());
        
            $portfolio['imagename']=md5(time()) . '_' . $image["name"];
            $portfolio['imagepath']="webroot/portfolio/";
            $get_fille= $portfolio['imagepath'].$portfolio['imagename'];



            if ( move_uploaded_file($image["tmp_name"], $get_fille) ) {
                # code...
            
           /* debug($portfolio);
            die();*/
            if ($this->Portfolios->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
        }
            $this->Flash->error(__('The portfolio could not be saved. Please, try again.'));
        }
       $services = $this->Portfolios->Services->find('list', ['limit' => 200]);
        $this->set(compact('portfolio','services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portfolio = $this->Portfolios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portfolio = $this->Portfolios->patchEntity($portfolio, $this->request->getData());
            if ($this->Portfolios->save($portfolio)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portfolio could not be saved. Please, try again.'));
        }
        //$portTypes = $this->Portfolios->PortTypes->find('list', ['limit' => 200]);
        $this->set(compact('portfolio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Portfolio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portfolio = $this->Portfolios->get($id);
        if ($this->Portfolios->delete($portfolio)) {
            $this->Flash->success(__('The portfolio has been deleted.'));
        } else {
            $this->Flash->error(__('The portfolio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
