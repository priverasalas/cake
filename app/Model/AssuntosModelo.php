<?php
App::uses('AppModel', 'Model');
/**
 * AssuntosModelo Model
 *
 */
class AssuntosModelo extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idModelos';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idAssuntos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
