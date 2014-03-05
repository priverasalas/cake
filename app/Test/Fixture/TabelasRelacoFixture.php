<?php
/**
 * TabelasRelacoFixture
 *
 */
class TabelasRelacoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tabelas_relacoes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas_Mae' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTipoTabMae' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'idTabelas_Filha' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTipoTabFilha' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas_Mae', 'idTabelas_Filha'), 'unique' => 1),
			'fk_tab_filha' => array('column' => 'idTabelas_Filha', 'unique' => 0),
			'fk_tipo_mae' => array('column' => 'idTipoTabMae', 'unique' => 0),
			'fk_tipo_filha' => array('column' => 'idTipoTabFilha', 'unique' => 0)
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
			'idTabelas_Mae' => 1,
			'idTipoTabMae' => 1,
			'idTabelas_Filha' => 1,
			'idTipoTabFilha' => 1
		),
	);

}
