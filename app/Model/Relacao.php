<?php
App::uses('AppModel', 'Model');
/**
 * Relacao Model
 *
 */
class Relacao extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'relacao';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTabelas_Sup';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idTabelas_Sub' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_relacao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
