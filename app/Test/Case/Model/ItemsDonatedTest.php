<?php
App::uses('ItemsDonated', 'Model');

/**
 * ItemsDonated Test Case
 *
 */
class ItemsDonatedTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.items_donated'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemsDonated = ClassRegistry::init('ItemsDonated');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemsDonated);

		parent::tearDown();
	}

}
