<?php
App::uses('TabA', 'Model');

/**
 * TabA Test Case
 *
 */
class TabATest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tab_a'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TabA = ClassRegistry::init('TabA');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TabA);

		parent::tearDown();
	}

}
