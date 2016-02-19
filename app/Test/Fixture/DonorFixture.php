<?php
/**
 * DonorFixture
 *
 */
class DonorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Donor_Last_Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_First_Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Organization' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Street' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_City' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_State' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Zip' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Donor_Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Donor_Phone' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Donor_Notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Donor_ID', 'unique' => 1),
			'Donor_ID' => array('column' => 'Donor_ID', 'unique' => 0)
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
			'Donor_ID' => 1,
			'Donor_Last_Name' => 'Lorem ipsum dolor sit amet',
			'Donor_First_Name' => 'Lorem ipsum dolor sit amet',
			'Donor_Organization' => 'Lorem ipsum dolor sit amet',
			'Donor_Street' => 'Lorem ipsum dolor sit amet',
			'Donor_City' => 'Lorem ipsum dolor sit amet',
			'Donor_State' => '',
			'Donor_Zip' => 1,
			'Donor_Email' => 'Lorem ipsum dolor sit amet',
			'Donor_Phone' => 1,
			'Donor_Notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
