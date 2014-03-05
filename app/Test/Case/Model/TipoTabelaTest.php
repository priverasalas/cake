<?php
App::uses('TipoTabela', 'Model');

/**
 * TipoTabela Test Case
 *
 */
class TipoTabelaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_tabela'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoTabela = ClassRegistry::init('TipoTabela');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoTabela);

		parent::tearDown();
	}

}
