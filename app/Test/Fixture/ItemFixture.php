<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Mem_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_Recieved_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Libraries_Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Item_Value' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Item_ID', 'unique' => 1),
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
			'Item_ID' => 1,
			'Mem_ID' => 1,
			'Donor_ID' => 1,
			'Item_Description' => 'Lorem ipsum dolor sit amet',
			'Item_Recieved_Date' => '2015-11-19',
			'Libraries_Library_ID' => 1,
			'Item_Value' => 1
		),
	);

}
