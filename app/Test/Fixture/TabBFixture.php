<?php
/**
 * TabBFixture
 *
 */
class TabBFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tab_b';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'col_pk' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'col_a' => array('type' => 'integer', 'null' => true, 'default' => null),
		'col_b' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'col_pk', 'unique' => 1)
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
			'col_pk' => 1,
			'col_a' => 1,
			'col_b' => 1
		),
	);

}
