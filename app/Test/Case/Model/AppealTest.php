<?php
App::uses('Appeal', 'Model');

/**
 * Appeal Test Case
 *
 */
class AppealTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appeal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Appeal = ClassRegistry::init('Appeal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Appeal);

		parent::tearDown();
	}

}
