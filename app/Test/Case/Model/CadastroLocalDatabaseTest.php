<?php
App::uses('CadastroLocalDatabase', 'Model');

/**
 * CadastroLocalDatabase Test Case
 *
 */
class CadastroLocalDatabaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cadastro_local_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CadastroLocalDatabase = ClassRegistry::init('CadastroLocalDatabase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CadastroLocalDatabase);

		parent::tearDown();
	}

}
