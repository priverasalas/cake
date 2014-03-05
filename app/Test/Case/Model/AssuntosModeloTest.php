<?php
App::uses('AssuntosModelo', 'Model');

/**
 * AssuntosModelo Test Case
 *
 */
class AssuntosModeloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assuntos_modelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AssuntosModelo = ClassRegistry::init('AssuntosModelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssuntosModelo);

		parent::tearDown();
	}

}
