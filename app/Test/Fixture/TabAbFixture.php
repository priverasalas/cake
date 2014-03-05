<?php
/**
 * TabAbFixture
 *
 */
class TabAbFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tab_ab';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'col_pk_a' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'col_pk_b' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('col_pk_a', 'col_pk_b'), 'unique' => 1),
			'FK2_TAB_AB' => array('column' => 'col_pk_b', 'unique' => 0)
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
			'col_pk_a' => 1,
			'col_pk_b' => 1
		),
	);

}
