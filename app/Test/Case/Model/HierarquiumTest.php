<?php
App::uses('Hierarquium', 'Model');

/**
 * Hierarquium Test Case
 *
 */
class HierarquiumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hierarquium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hierarquium = ClassRegistry::init('Hierarquium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hierarquium);

		parent::tearDown();
	}

}
