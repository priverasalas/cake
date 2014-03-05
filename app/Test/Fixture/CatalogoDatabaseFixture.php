<?php
/**
 * CatalogoDatabaseFixture
 *
 */
class CatalogoDatabaseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'catalogo_database';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCatalogo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Host' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'porta' => array('type' => 'integer', 'null' => false, 'default' => null),
		'string_conexao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Tipo_Database_idTipo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'Instituicao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'Usuario' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'senha' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'database' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'esquema' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCatalogo_Database', 'unique' => 1),
			'fk_Catalogo_Database_Tipo_Database1_idx' => array('column' => 'Tipo_Database_idTipo_Database', 'unique' => 0),
			'fk_Catalogo_Database_Instituicao1_idx' => array('column' => 'Instituicao_id', 'unique' => 0)
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
			'idCatalogo_Database' => 1,
			'Host' => 'Lorem ipsum dolor sit amet',
			'porta' => 1,
			'string_conexao' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'Tipo_Database_idTipo_Database' => 1,
			'Instituicao_id' => 1,
			'Usuario' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'database' => 'Lorem ipsum dolor sit amet',
			'esquema' => 'Lorem ipsum dolor sit amet'
		),
	);

}
