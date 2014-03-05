<?php
App::uses('ComandosSql', 'Model');

/**
 * ComandosSql Test Case
 *
 */
class ComandosSqlTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comandos_sql',
		'app.tipo_database_tipo_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ComandosSql = ClassRegistry::init('ComandosSql');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ComandosSql);

		parent::tearDown();
	}

}
