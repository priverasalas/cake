<?php
App::uses('AppModel', 'Model');
/**
 * Agendamento Model
 *
 * @property Instituicao $Instituicao
 * @property CatalogoDatabaseCatalogoDatabase $CatalogoDatabaseCatalogoDatabase
 */
class Agendamento extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'agendamento';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idAgendamento';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo_agendamento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Instituicao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Catalogo_Database_idCatalogo_Database' => array(
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
		'Instituicao' => array(
			'className' => 'Instituicao',
			'foreignKey' => 'Instituicao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)/*,
		'CatalogoDatabaseCatalogoDatabase' => array(
			'className' => 'CatalogoDatabaseCatalogoDatabase',
			'foreignKey' => 'Catalogo_Database_idCatalogo_Database',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);
}
