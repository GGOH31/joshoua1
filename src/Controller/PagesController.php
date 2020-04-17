<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['display','humanitaire', 'detail','humanitaires','export','import','acceuil']);
    }
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Abouts');
        $this->loadModel('Contacts');
        $this->loadModel('Portfolios');
        $this->loadModel('Services');
        $this->loadModel('Questions');
        $this->loadModel('Teames');
        $this->loadModel('Users');
        $this->loadModel('Slides');
        $this->loadModel('Articles');

    
    
    
    }


    public function display (){
        $this->paginate = [
            'limit' => 3,
            'order'=>['created'=>'DESC']
        ];
        $services = $this->paginate($this->Services);
        
        $this->paginate = [
             'contain' => ['Services'],
         ];
         $portfolios = $this->paginate($this->Portfolios);
       /*  
foreach ($portfolios as $key => $portfolio) {
    debug($portfolio);
    # code...
}
die();*/

        $abouts =   $this->Abouts->find('all', [
            'conditions' => ['valide' => 1],
            'limit' => 1,
            'order'=>['id'=>'DESC']
            ])->toArray();


            foreach ($abouts as  $about) {
                # code...
              
                
            }
           

        $this->set(compact('about','services','portfolios'));

    }

    public function humanitaire(){


        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));

    }

    public function humanitaires(){
            
               }

    public function import()
    {
        $this->viewBuilder()->setLayout("font_2_layout");
                
                   
    }

    public function detail($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);
        $articleAll = $this->Articles->find('all')->toArray();

        $this->set(compact('article','articleAll'));
    }


    public function acceuil (){
        $this->viewBuilder()->setLayout("fontLayout");
        $acceuil="acceuil";
        $this->set(compact('acceuil'));
    }



}
