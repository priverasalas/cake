<?php
App::uses('AppModel', 'Model');
/**
 * ComandosSql Model
 *
 * @property TipoDatabaseTipoDatabase $TipoDatabaseTipoDatabase
 */
class ComandosSql extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'comandos_sql';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idComandos_SQL';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sentenca' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_sentenca' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Tipo_Database_idTipo_Database' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoDatabaseTipoDatabase' => array(
			'className' => 'TipoDatabaseTipoDatabase',
			'foreignKey' => 'Tipo_Database_idTipo_Database',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
