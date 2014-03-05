<?php
/**
 * AssuntosModeloFixture
 *
 */
class AssuntosModeloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idModelos' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idAssuntos' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idModelos', 'idAssuntos'), 'unique' => 1),
			'fk_Modelos_has_Assuntos_Assuntos1_idx' => array('column' => 'idAssuntos', 'unique' => 0),
			'fk_Modelos_has_Assuntos_Modelos1_idx' => array('column' => 'idModelos', 'unique' => 0)
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
			'idModelos' => 1,
			'idAssuntos' => 1
		),
	);

}
