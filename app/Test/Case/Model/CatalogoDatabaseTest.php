<?php
App::uses('CatalogoDatabase', 'Model');

/**
 * CatalogoDatabase Test Case
 *
 */
class CatalogoDatabaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.catalogo_database',
		'app.tipo_database_tipo_database',
		'app.instituicao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CatalogoDatabase = ClassRegistry::init('CatalogoDatabase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CatalogoDatabase);

		parent::tearDown();
	}

}
