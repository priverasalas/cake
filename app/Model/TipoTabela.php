<?php
App::uses('AppModel', 'Model');
/**
 * TipoTabela Model
 *
 */
class TipoTabela extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_tabela';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTipo_Tabela';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo' => array(
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
