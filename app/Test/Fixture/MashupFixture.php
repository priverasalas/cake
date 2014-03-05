<?php
/**
 * MashupFixture
 *
 */
class MashupFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'mashup';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTabelas_fatos' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_metrica' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idTabelas_dimensoes' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'idColuna_dimensao' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTabelas_fatos', 'idColuna_metrica', 'idTabelas_dimensoes', 'idColuna_dimensao'), 'unique' => 1),
			'fk_Mashup_Coluna2_idx' => array('column' => array('idTabelas_dimensoes', 'idColuna_dimensao'), 'unique' => 0)
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
			'idTabelas_fatos' => 1,
			'idColuna_metrica' => 1,
			'idTabelas_dimensoes' => 1,
			'idColuna_dimensao' => 1
		),
	);

}
