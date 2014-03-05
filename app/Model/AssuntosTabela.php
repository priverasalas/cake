<?php
App::uses('AppModel', 'Model');
/**
 * AssuntosTabela Model
 *
 */
class AssuntosTabela extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTabelas';

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
