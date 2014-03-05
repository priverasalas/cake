<?php
App::uses('Relacao', 'Model');

/**
 * Relacao Test Case
 *
 */
class RelacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.relacao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Relacao = ClassRegistry::init('Relacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Relacao);

		parent::tearDown();
	}

}
