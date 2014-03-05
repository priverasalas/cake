<?php
/**
 * PedidosProcessamentoFixture
 *
 */
class PedidosProcessamentoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'pedidos_processamento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idFila_Processamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'Data_Solicitacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'Status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'qtd_modelos_novos' => array('type' => 'integer', 'null' => true, 'default' => null),
		'qtd_modelos_atualizados' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idFila_Processamento', 'unique' => 1)
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
			'idFila_Processamento' => 1,
			'Data_Solicitacao' => '2014-03-05',
			'Status' => 'L',
			'qtd_modelos_novos' => 1,
			'qtd_modelos_atualizados' => 1
		),
	);

}
