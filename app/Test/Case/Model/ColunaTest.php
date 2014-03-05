<?php
App::uses('Coluna', 'Model');

/**
 * Coluna Test Case
 *
 */
class ColunaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coluna'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coluna = ClassRegistry::init('Coluna');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coluna);

		parent::tearDown();
	}

}
