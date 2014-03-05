<?php
/**
 * AgendamentoFixture
 *
 */
class AgendamentoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'agendamento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idAgendamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo_agendamento' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'comment' => '(N)ormal, (M)ensal, (S)emanal, (Q)uinzenal', 'charset' => 'utf8'),
		'horario_processamento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'comment' => 'Indica o horário em que uma soliciatação pode ser submetida para o servidor destino', 'charset' => 'utf8'),
		'dia_processamento' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Processamento Mensal - dia do mês (1 à 30). Semanal, varia de 1 à 7 (domingo à sábado). Quinzenal - 1 à 15. Se primeira quinzena e valor 2, solicita dia 2, se for 2a quinzena, solicita dia 16.'),
		'flag_imediato' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'Instituicao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'Catalogo_Database_idCatalogo_Database' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'comment' => '(P)rogramado, (E)nviado, (R)etornado,  (A)tendido, (F)alha', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idAgendamento', 'unique' => 1),
			'fk_Agendamento_Instituicao1_idx' => array('column' => 'Instituicao_id', 'unique' => 0),
			'fk_Agendamento_Catalogo_Database1_idx' => array('column' => 'Catalogo_Database_idCatalogo_Database', 'unique' => 0)
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
			'idAgendamento' => 1,
			'tipo_agendamento' => 'Lor',
			'horario_processamento' => 'Lorem ',
			'dia_processamento' => 1,
			'flag_imediato' => 1,
			'Instituicao_id' => 1,
			'Catalogo_Database_idCatalogo_Database' => 1,
			'status' => 'Lorem ipsum dolor sit ame'
		),
	);

}
