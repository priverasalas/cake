<?php
App::uses('FilaProcessamento', 'Model');

/**
 * FilaProcessamento Test Case
 *
 */
class FilaProcessamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fila_processamento',
		'app.agendamento_agendamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FilaProcessamento = ClassRegistry::init('FilaProcessamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FilaProcessamento);

		parent::tearDown();
	}

}
