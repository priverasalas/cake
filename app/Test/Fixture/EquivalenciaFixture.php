<?php
/**
 * EquivalenciaFixture
 *
 */
class EquivalenciaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas_equivalencia_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_equivalencia_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTabelas_equivalencia_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_equivalencia_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo_equivalencia' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas_equivalencia_1', 'idColuna_equivalencia_1', 'idTabelas_equivalencia_2', 'idColuna_equivalencia_2'), 'unique' => 1),
			'fk_Coluna_has_Coluna_Coluna4_idx' => array('column' => array('idTabelas_equivalencia_2', 'idColuna_equivalencia_2'), 'unique' => 0),
			'fk_Coluna_has_Coluna_Coluna3_idx' => array('column' => array('idTabelas_equivalencia_1', 'idColuna_equivalencia_1'), 'unique' => 0)
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
			'idTabelas_equivalencia_1' => 1,
			'idColuna_equivalencia_1' => 1,
			'idTabelas_equivalencia_2' => 1,
			'idColuna_equivalencia_2' => 1,
			'tipo_equivalencia' => 'Lor'
		),
	);

}
