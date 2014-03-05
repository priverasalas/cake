<?php
App::uses('Assunto', 'Model');

/**
 * Assunto Test Case
 *
 */
class AssuntoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assunto',
		'app.modelo',
		'app.assuntos_modelo',
		'app.tabela',
		'app.assuntos_tabela'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assunto = ClassRegistry::init('Assunto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assunto);

		parent::tearDown();
	}

}
