<?php
/**
 * TabelasProcessadaFixture
 *
 */
class TabelasProcessadaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Owner' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'Nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idCatalogo_Databases' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'idFila_Processamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('Owner', 'Nome'), 'unique' => 1),
			'fk_Tabelas_Processadas_Cadastro_Local_Databases1_idx' => array('column' => 'idCatalogo_Databases', 'unique' => 0),
			'fk_Tabelas_Processadas_Pedidos_Processamento1_idx' => array('column' => 'idFila_Processamento', 'unique' => 0)
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
			'Owner' => 'Lorem ipsum dolor sit amet',
			'Nome' => 'Lorem ipsum dolor sit amet',
			'idCatalogo_Databases' => 1,
			'idFila_Processamento' => 1
		),
	);

}
