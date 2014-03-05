<?php
App::uses('AppModel', 'Model');
/**
 * Noticia Model
 *
 * @property Categoria $Categoria
 * @property Autor $Autor
 */
class Noticia extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Autor' => array(
			'className' => 'Autor',
			'foreignKey' => 'autor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
