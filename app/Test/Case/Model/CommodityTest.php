<?php
App::uses('Commodity', 'Model');

/**
 * Commodity Test Case
 *
 */
class CommodityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commodity',
		'app.customer',
		'app.investment',
		'app.stock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commodity = ClassRegistry::init('Commodity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commodity);

		parent::tearDown();
	}

}
