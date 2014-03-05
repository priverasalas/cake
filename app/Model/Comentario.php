<?php
App::uses('AppModel', 'Model');
/**
 * Comentario Model
 *
 * @property Noticias $Noticias
 */
class Comentario extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'noticias_id' => array(
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
		'Noticias' => array(
			'className' => 'Noticias',
			'foreignKey' => 'noticias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
