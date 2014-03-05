<?php
App::uses('Msgagendamento', 'Model');

/**
 * Msgagendamento Test Case
 *
 */
class MsgagendamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.msgagendamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Msgagendamento = ClassRegistry::init('Msgagendamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Msgagendamento);

		parent::tearDown();
	}

}
