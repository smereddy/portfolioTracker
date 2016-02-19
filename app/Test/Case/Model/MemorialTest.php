<?php
App::uses('Memorial', 'Model');

/**
 * Memorial Test Case
 *
 */
class MemorialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.memorial'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Memorial = ClassRegistry::init('Memorial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Memorial);

		parent::tearDown();
	}

}
