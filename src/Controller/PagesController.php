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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

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



}
