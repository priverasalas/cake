<?php
App::uses('AppModel', 'Model');
/**
 * TipoDado Model
 *
 */
class TipoDado extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTipo_Dados';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
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
