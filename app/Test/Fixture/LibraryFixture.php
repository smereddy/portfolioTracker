<?php
/**
 * LibraryFixture
 *
 */
class LibraryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Library_Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_Address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_City' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_State' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Library_Zip' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Librarian' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Librarian_Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Work_Phone' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Library_ID', 'unique' => 1),
			'Library_ID' => array('column' => 'Library_ID', 'unique' => 0)
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
			'Library_ID' => 1,
			'Library_Name' => 'Lorem ipsum dolor sit amet',
			'Library_Address' => 'Lorem ipsum dolor sit amet',
			'Library_City' => 'Lorem ipsum dolor sit amet',
			'Library_State' => '',
			'Library_Zip' => 1,
			'Librarian' => 'Lorem ipsum dolor sit amet',
			'Librarian_Email' => 'Lorem ipsum dolor sit amet',
			'Work_Phone' => 1
		),
	);

}
