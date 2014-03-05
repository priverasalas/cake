<?php
/**
 * ModeloFixture
 *
 */
class ModeloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idModelos' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Catalogo_Database_idCatalogo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'idFactTable' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idModelos', 'unique' => 1),
			'fk_Modelos_Catalogo_Database1_idx' => array('column' => 'Catalogo_Database_idCatalogo_Database', 'unique' => 0),
			'fk_fact_table' => array('column' => 'idFactTable', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'Catalogo_Database_idCatalogo_Database' => 1,
			'idFactTable' => 1
		),
	);

}
