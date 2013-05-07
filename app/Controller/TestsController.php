<?php

class TestsController extends AppController
{

    public $uses = array('User');
    public $helpers = array('Access');

    public function beforeFilter()
    {

        //var_dump( $this->Access->isLoggedIn());exit;

        // $userId = $this->Auth->user('id');
        // $this->User->id = $userId;

        // $chk = $this->CmsAcl->check( $this->User, 'controllers/Posts/index' );

        // //$this->CmsAcl->check( array('model' => 'User', 'foreign_key' => 1 ), 'controllers/Posts');
        // //var_dump($userId);exit;
        // var_dump( $chk );
        
        // exit;

        // //$this->CmsAcl->check
    }



    public function index()
    {
        //var_dump( '123' );exit;
    }
}