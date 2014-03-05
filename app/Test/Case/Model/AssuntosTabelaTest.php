<?php
App::uses('AssuntosTabela', 'Model');

/**
 * AssuntosTabela Test Case
 *
 */
class AssuntosTabelaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assuntos_tabela'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AssuntosTabela = ClassRegistry::init('AssuntosTabela');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssuntosTabela);

		parent::tearDown();
	}

}
