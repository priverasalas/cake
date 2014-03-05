<?php
App::uses('Tabela', 'Model');

/**
 * Tabela Test Case
 *
 */
class TabelaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tabela',
		'app.assunto',
		'app.modelo',
		'app.catalogo_database_catalogo_database',
		'app.assuntos_modelo',
		'app.assuntos_tabela'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tabela = ClassRegistry::init('Tabela');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tabela);

		parent::tearDown();
	}

}
