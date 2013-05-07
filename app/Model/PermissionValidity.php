<?php
App::uses('AppModel', 'Model');
/**
 * PermissionValidity Model
 *
 * @property Permission $Permission
 */
class PermissionValidity extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	// public $belongsTo = array(
	// 	'Permission' => array(
	// 		'className' => 'Permission',
	// 		'foreignKey' => 'permission_id',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => ''
	// 	)
	// );

    public $hasOne = array(
        'Permission' => array(
            'className' => 'Permission',
            'foreignKey' => 'id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
