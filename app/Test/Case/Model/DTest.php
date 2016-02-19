<?php
App::uses('d', 'Model');

/**
 * d Test Case
 *
 */
class dTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.d'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->d = ClassRegistry::init('d');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->d);

		parent::tearDown();
	}

}
