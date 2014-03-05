<?php
App::uses('Equivalencia', 'Model');

/**
 * Equivalencia Test Case
 *
 */
class EquivalenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.equivalencia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Equivalencia = ClassRegistry::init('Equivalencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Equivalencia);

		parent::tearDown();
	}

}
