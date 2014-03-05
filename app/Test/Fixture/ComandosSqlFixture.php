<?php
/**
 * ComandosSqlFixture
 *
 */
class ComandosSqlFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'comandos_sql';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idComandos_SQL' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'sentenca' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_sentenca' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Tipo_Database_idTipo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idComandos_SQL', 'unique' => 1),
			'fk_Comandos_SQL_Tipo_Database1_idx' => array('column' => 'Tipo_Database_idTipo_Database', 'unique' => 0)
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
			'idComandos_SQL' => 1,
			'sentenca' => 'Lorem ipsum dolor sit amet',
			'tipo_sentenca' => 'Lo',
			'Tipo_Database_idTipo_Database' => 1
		),
	);

}
