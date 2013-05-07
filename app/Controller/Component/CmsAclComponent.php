<?php


App::uses('AclComponent', 'Controller/Component');
App::uses('ClassRegistry', 'Utility');

/**
*
* @author Nguyen Duong Hai Dang ( dangndh@leverages.jp )
*/
class CmsAclComponent extends AclComponent 
{

    /**
    * check if ARO has permission to access ACO in a period
    * @author Nguyen Duong Hai Dang ( dangndh@leverages.jp )
    * 
    */
    public function check($aro, $aco, $action = "*")
    {

        $permission = parent::check( $aro, $aco, $action );

        if( is_object( $aro ) && get_class( $aro ) == 'User' )
        {
 

            $this->Permission = ClassRegistry::init(array('class' => 'Permission', 'alias' => 'Permission'));    
            $this->PermissionValidity = ClassRegistry::init(array('class' => 'PermissionValidity', 'alias' => 'PermissionValidity'));

            $aroNode = $this->Permission->Aro->node( $aro );
            $acoNode = $this->Permission->Aco->node( $aco );

            $aro_id = $aroNode[0]['Aro']['id'];
            $aco_id = $acoNode[0]['Aco']['id'];

            $pem = $this->Permission->find('first', array(
                'conditions' => array('aro_id' => $aro_id, 'aco_id' => $aco_id )
            ));

            // $pem = $this->Permission->find('first', array(
            //     'conditions' => array('aro_id' => 1, 'aco_id' => 1)
            // ));

            if( !empty( $pem ) )
            {
                $aro_aco_id = $pem['Permission']['id'];
                $validity = $this->PermissionValidity->findById( $aro_aco_id );
                if( !empty( $validity ) )
                {

                    $valid = ( strtotime( $validity['PermissionValidity']['valid_from'] ) <= time() &&  strtotime($validity['PermissionValidity']['valid_to']) >= time() ) ? true : false;
                    return $permission && $valid;
                }
            }
        }

        return $permission;

    }
    
}