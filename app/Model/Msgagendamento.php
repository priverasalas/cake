<?php
App::uses('AppModel', 'Model');
/**
 * Msgagendamento Model
 *
 */
class Msgagendamento extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'msgagendamento';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idMsg';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idAgendamento' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'deMsg' => array(
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
