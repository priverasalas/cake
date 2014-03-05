<?php
/**
 * TipoTabelaFixture
 *
 */
class TipoTabelaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_tabela';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTipo_Tabela' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTipo_Tabela', 'unique' => 1)
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
			'idTipo_Tabela' => 1,
			'tipo' => 'Lorem '
		),
	);

}
