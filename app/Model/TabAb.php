<?php
App::uses('AppModel', 'Model');
/**
 * TabAb Model
 *
 */
class TabAb extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tab_ab';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'col_pk_a';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'col_pk_b' => array(
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
