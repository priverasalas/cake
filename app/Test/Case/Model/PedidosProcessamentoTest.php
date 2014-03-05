<?php
App::uses('PedidosProcessamento', 'Model');

/**
 * PedidosProcessamento Test Case
 *
 */
class PedidosProcessamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pedidos_processamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PedidosProcessamento = ClassRegistry::init('PedidosProcessamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PedidosProcessamento);

		parent::tearDown();
	}

}
