<?php
App::uses('TabB', 'Model');

/**
 * TabB Test Case
 *
 */
class TabBTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tab_b'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TabB = ClassRegistry::init('TabB');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TabB);

		parent::tearDown();
	}

}
