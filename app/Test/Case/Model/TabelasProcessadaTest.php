<?php
App::uses('TabelasProcessada', 'Model');

/**
 * TabelasProcessada Test Case
 *
 */
class TabelasProcessadaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tabelas_processada'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TabelasProcessada = ClassRegistry::init('TabelasProcessada');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TabelasProcessada);

		parent::tearDown();
	}

}
