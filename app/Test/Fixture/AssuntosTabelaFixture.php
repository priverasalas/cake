<?php
/**
 * AssuntosTabelaFixture
 *
 */
class AssuntosTabelaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idAssuntos' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas', 'idAssuntos'), 'unique' => 1),
			'fk_Tabelas_has_Assuntos_Assuntos1_idx' => array('column' => 'idAssuntos', 'unique' => 0),
			'fk_Tabelas_has_Assuntos_Tabelas1_idx' => array('column' => 'idTabelas', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idTabelas' => 1,
			'idAssuntos' => 1
		),
	);

}
