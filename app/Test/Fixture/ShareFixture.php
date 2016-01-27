<?php
/**
 * ShareFixture
 *
 */
class ShareFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'share';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'shareID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'LastName' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'City' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Cost' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'shareID' => 1,
			'LastName' => 'Lorem ipsum dolor sit amet',
			'FirstName' => 'Lorem ipsum dolor sit amet',
			'Address' => 'Lorem ipsum dolor sit amet',
			'City' => 'Lorem ipsum dolor sit amet',
			'Cost' => ''
		),
	);

}
