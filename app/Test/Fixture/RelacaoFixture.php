<?php
/**
 * RelacaoFixture
 *
 */
class RelacaoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'relacao';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas_Sup' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTabelas_Sub' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo_relacao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas_Sup', 'idTabelas_Sub'), 'unique' => 1),
			'fk_Tabelas_has_Tabelas_Tabelas2_idx' => array('column' => 'idTabelas_Sub', 'unique' => 0),
			'fk_Tabelas_has_Tabelas_Tabelas1_idx' => array('column' => 'idTabelas_Sup', 'unique' => 0)
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
			'idTabelas_Sup' => 1,
			'idTabelas_Sub' => 1,
			'tipo_relacao' => 'Lor'
		),
	);

}
