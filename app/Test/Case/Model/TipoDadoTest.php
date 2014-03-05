<?php
App::uses('TipoDado', 'Model');

/**
 * TipoDado Test Case
 *
 */
class TipoDadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_dado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoDado = ClassRegistry::init('TipoDado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoDado);

		parent::tearDown();
	}

}
