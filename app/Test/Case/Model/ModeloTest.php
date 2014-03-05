<?php
App::uses('Modelo', 'Model');

/**
 * Modelo Test Case
 *
 */
class ModeloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.modelo',
		'app.catalogo_database_catalogo_database',
		'app.assunto',
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
		$this->Modelo = ClassRegistry::init('Modelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Modelo);

		parent::tearDown();
	}

}
