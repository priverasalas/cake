<?php
App::uses('AppModel', 'Model');
/**
 * Assunto Model
 *
 * @property Modelo $Modelo
 * @property Tabela $Tabela
 */
class Assunto extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idAssuntos';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'palavras_chave' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
/*
	public $hasAndBelongsToMany = array(
		'Modelo' => array(
			'className' => 'Modelo',
			'joinTable' => 'assuntos_modelos',
			'foreignKey' => 'assunto_id',
			'associationForeignKey' => 'modelo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Tabela' => array(
			'className' => 'Tabela',
			'joinTable' => 'assuntos_tabelas',
			'foreignKey' => 'assunto_id',
			'associationForeignKey' => 'tabela_id',
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
