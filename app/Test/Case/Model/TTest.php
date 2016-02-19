<?php
App::uses('t', 'Model');

/**
 * t Test Case
 *
 */
class tTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->t = ClassRegistry::init('t');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->t);

		parent::tearDown();
	}

}
