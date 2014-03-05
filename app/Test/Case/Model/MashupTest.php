<?php
App::uses('Mashup', 'Model');

/**
 * Mashup Test Case
 *
 */
class MashupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mashup'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mashup = ClassRegistry::init('Mashup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mashup);

		parent::tearDown();
	}

}
