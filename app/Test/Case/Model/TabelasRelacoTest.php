<?php
App::uses('TabelasRelaco', 'Model');

/**
 * TabelasRelaco Test Case
 *
 */
class TabelasRelacoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tabelas_relaco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TabelasRelaco = ClassRegistry::init('TabelasRelaco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TabelasRelaco);

		parent::tearDown();
	}

}
