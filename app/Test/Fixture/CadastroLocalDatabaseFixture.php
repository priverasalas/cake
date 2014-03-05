<?php
/**
 * CadastroLocalDatabaseFixture
 *
 */
class CadastroLocalDatabaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idCatalogo_Databases' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Host' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'porta' => array('type' => 'integer', 'null' => false, 'default' => null),
		'string_conexao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Instituicao_Id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'idTipo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idCatalogo_Databases', 'unique' => 1),
			'fk_Cadastro_Local_Databases_Tipo_Database1_idx' => array('column' => 'idTipo_Database', 'unique' => 0)
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
			'idCatalogo_Databases' => 1,
			'Host' => 'Lorem ipsum dolor sit amet',
			'porta' => 1,
			'string_conexao' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'Instituicao_Id' => 1,
			'idTipo_Database' => 1
		),
	);

}
