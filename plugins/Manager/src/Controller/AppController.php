<?php
declare(strict_types=1);

namespace Manager\Controller;


use App\Controller\AppController as BaseController;


class AppController extends BaseController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        //$this->loadComponent('Auth');
        /*$this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Manager'
            ],
            'loginRedirect' => [
                'controller' => 'Commandes',
                'action' => 'index'
            ],                
            'authError' => 'Echec d\'authentification',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username']
                    ]
            ],
            'storage' => 'Session'
        ]);

        $this->Auth->allow(['add', 'index']);*/
    }


}
