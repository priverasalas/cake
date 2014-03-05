<?php
App::uses('TabAb', 'Model');

/**
 * TabAb Test Case
 *
 */
class TabAbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tab_ab'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TabAb = ClassRegistry::init('TabAb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TabAb);

		parent::tearDown();
	}

}
