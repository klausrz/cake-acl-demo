<?php

/**
* @author Nguyen Duong Hai Dang - dangndh@leverages.jp
*
*/   



class AccessHelper extends AppHelper
{   
    public $helpers = array("Session");   

    /**
    * Check if user has logged in
    * @author Nguyen Duong Hai Dang - dangndh@leverages.jp
    * usage: in view:  $this->Access->isLoggedIn()
    */   
    public function isLoggedIn()
    {   
        $user = $this->Session->read('Auth.User');
        return !empty($user);   
    }   

    /**
    * Get user's properties
    * @author Nguyen Duong Hai Dang - dangndh@leverages.jp
    * @param $field string - user's property to get
    * usage: in view:  $this->Access->user('username')
    */
    public function user( $field )
    {
        if( !$this->isLoggedIn() )
            return false;

        return $this->Session->read('Auth.User.'. $field );
    }

    public function check()
    {
        
    }
}