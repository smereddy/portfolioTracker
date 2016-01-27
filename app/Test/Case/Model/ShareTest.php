<?php
App::uses('Share', 'Model');

/**
 * Share Test Case
 *
 */
class ShareTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.share'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Share = ClassRegistry::init('Share');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Share);

		parent::tearDown();
	}

}
