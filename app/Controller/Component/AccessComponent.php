<?php   



App::uses('AuthComponent', 'Controller/Component');

class AccessComponent extends Component
{   
    public $components = array('CmsAcl', 'Auth');   
    public $uses = array('User');
    public $user;   
   
    function __construct()
    {   

        $this->Auth = new AuthComponent(new AuthComponent());

        

        var_dump( $this->Session->Auth );exit;
        $auth->Session = $this->Session;

        $this->user = $auth->user();   

        //$this->Auth = new AccessComponent(new ComponentCollection());
    }   



    function check($aco, $action='*')
    {   
        //$this->User = ClassRegistry::init(array('class' => 'User', 'alias' => 'User'));    
        var_dump( $this->Auth );exit;
        $this->User->id = $this->user['id'];

        if(!empty($this->user) && $this->CmsAcl->check( $this->User, $aco, $action ) )
            return true;
        return false;   
    }   

}   