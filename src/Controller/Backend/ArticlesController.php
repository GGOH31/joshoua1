<?php
namespace App\Controller\Backend;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $articles = $this->paginate($this->Articles);


        $this->set(compact('articles'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);

        $this->set('article', $article);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        /*$article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            debug($article);
            die();
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $services = $this->Articles->Services->find('list', ['limit' => 200]);
        $this->set(compact('article','services'));*/

        $article = $this->Articles->newEntity();
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
            
$article = $this->Articles->patchEntity($article, $this->request->getData());
        
            $article['image']=md5(time()) . '_' . $image["name"];
            $article['imagepath']="webroot/articles/";
            $get_fille= $article['imagepath'].$article['image'];



            if ( move_uploaded_file($image["tmp_name"], $get_fille) ) {
                # code...
            
           /* debug($portfolio);
            die();*/
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The portfolio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
        }
            $this->Flash->error(__('The portfolio could not be saved. Please, try again.'));
        }
        $services = $this->Articles->Services->find('list', ['limit' => 200]);
        $this->set(compact('article','services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
