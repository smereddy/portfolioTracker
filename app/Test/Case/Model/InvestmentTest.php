<?php
App::uses('Investment', 'Model');

/**
 * Investment Test Case
 *
 */
class InvestmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.investment',
		'app.customer',
		'app.stock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Investment = ClassRegistry::init('Investment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Investment);

		parent::tearDown();
	}

}
