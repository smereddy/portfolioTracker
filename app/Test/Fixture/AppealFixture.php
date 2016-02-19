<?php
/**
 * AppealFixture
 *
 */
class AppealFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Donor_ID' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Appeal_Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Start_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'End_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Appeal_ID', 'unique' => 1)
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
			'Appeal_ID' => 1,
			'Donor_ID' => 1,
			'Appeal_Description' => 'Lorem ipsum dolor sit amet',
			'Start_Time_Date' => '2015-11-19',
			'End_Time_Date' => '2015-11-19',
			'Type' => 'Lorem ipsum d'
		),
	);

}
