<?php
/**
 * MsgagendamentoFixture
 *
 */
class MsgagendamentoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'msgagendamento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idAgendamento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'idMsg' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'deMsg' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dtMsg' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idMsg', 'unique' => 1),
			'FK_MSG_Agendamento' => array('column' => 'idAgendamento', 'unique' => 0)
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
			'idMsg' => 1,
			'deMsg' => 'Lorem ipsum dolor sit amet',
			'dtMsg' => 1394028573
		),
	);

}
