<?php
/**
 * HierarquiumFixture
 *
 */
class HierarquiumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas_coluna_mae' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_mae' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTabelas_coluna_filha' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_filha' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nvel_hierarquia' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas_coluna_mae', 'idColuna_mae', 'idTabelas_coluna_filha', 'idColuna_filha'), 'unique' => 1),
			'fk_Coluna_has_Coluna_Coluna2_idx' => array('column' => array('idTabelas_coluna_filha', 'idColuna_filha'), 'unique' => 0),
			'fk_Coluna_has_Coluna_Coluna1_idx' => array('column' => array('idTabelas_coluna_mae', 'idColuna_mae'), 'unique' => 0)
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
			'idTabelas_coluna_mae' => 1,
			'idColuna_mae' => 1,
			'idTabelas_coluna_filha' => 1,
			'idColuna_filha' => 1,
			'nvel_hierarquia' => 1
		),
	);

}
