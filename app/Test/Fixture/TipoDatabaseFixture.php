<?php
/**
 * TipoDatabaseFixture
 *
 */
class TipoDatabaseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_database';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTipo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'versao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTipo_Database', 'unique' => 1)
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
			'idTipo_Database' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'versao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
