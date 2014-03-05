<?php
App::uses('Agendamento', 'Model');

/**
 * Agendamento Test Case
 *
 */
class AgendamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agendamento',
		'app.instituicao',
		'app.catalogo_database_catalogo_database'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agendamento = ClassRegistry::init('Agendamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agendamento);

		parent::tearDown();
	}

}
