<?php
App::uses('TipoDatabase', 'Model');

/**
 * TipoDatabase Test Case
 *
 */
class TipoDatabaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoDatabase = ClassRegistry::init('TipoDatabase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoDatabase);

		parent::tearDown();
	}

}
