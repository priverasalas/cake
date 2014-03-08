<?php
App::uses('AppModel', 'Model');
/**
 * Modelo Model
 *
 * @property CatalogoDatabaseCatalogoDatabase $CatalogoDatabaseCatalogoDatabase
 * @property Assunto $Assunto
 */
class Modelo extends AppModel {

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
		'idFactTable' => array(
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
		'CatalogoDatabase' => array(
			'className' => 'CatalogoDatabase',
			'foreignKey' => 'Catalogo_Database_idCatalogo_Database',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tabela' => array(
			'className' => 'Tabela',
			//'joinTable' => 'assuntos_tabelas',
			'foreignKey' => 'idFactTable',
			//'associationForeignKey' => 'tabela_id',
			//'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			//'limit' => '',
			//'offset' => '',
			//'finderQuery' => '',
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	/*public $hasAndBelongsToMany = array(
		'Assunto' => array(
			'className' => 'Assunto',
			'joinTable' => 'assuntos_modelos',
			'foreignKey' => 'modelo_id',
			'associationForeignKey' => 'assunto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);*/

}
