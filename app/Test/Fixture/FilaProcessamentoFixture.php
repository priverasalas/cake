<?php
/**
 * FilaProcessamentoFixture
 *
 */
class FilaProcessamentoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'fila_processamento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idFila_Processamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'data_processamento' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora_processamento' => array('type' => 'time', 'null' => false, 'default' => null),
		'url_weservice' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_envio' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'data_retorno' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'qtd_novos_modelos' => array('type' => 'integer', 'null' => true, 'default' => null),
		'qtd_modelos_atualizados' => array('type' => 'integer', 'null' => true, 'default' => null),
		'flag_imediato' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'Agendamento_idAgendamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idFila_Processamento', 'unique' => 1),
			'fk_Fila_Processamento_Agendamento1_idx' => array('column' => 'Agendamento_idAgendamento', 'unique' => 0)
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
			'data_processamento' => '2014-03-05',
			'hora_processamento' => '14:08:28',
			'url_weservice' => 'Lorem ipsum dolor sit amet',
			'status' => 'L',
			'data_envio' => 1394028508,
			'data_retorno' => 1394028508,
			'qtd_novos_modelos' => 1,
			'qtd_modelos_atualizados' => 1,
			'flag_imediato' => 1,
			'Agendamento_idAgendamento' => 1
		),
	);

}
