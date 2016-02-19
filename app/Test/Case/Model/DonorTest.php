<?php
App::uses('Donor', 'Model');

/**
 * Donor Test Case
 *
 */
class DonorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.donor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Donor = ClassRegistry::init('Donor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Donor);

		parent::tearDown();
	}

}
