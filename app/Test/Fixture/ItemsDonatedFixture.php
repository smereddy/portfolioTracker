<?php
/**
 * ItemsDonatedFixture
 *
 */
class ItemsDonatedFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'items_donated';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Memorial_Mem_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'Donors_Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Item_Recieved_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Libraries_Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_Value' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Item_ID', 'unique' => 1),
			'Items_Donated__IDX' => array('column' => 'Memorial_Mem_ID', 'unique' => 1),
			'Items_Donated_Donors_FK' => array('column' => 'Donors_Donor_ID', 'unique' => 0),
			'Items_Donated_Libraries_FK' => array('column' => 'Libraries_Library_ID', 'unique' => 0)
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
			'Memorial_Mem_ID' => 1,
			'Donors_Donor_ID' => 1,
			'Item_Description' => 'Lorem ipsum dolor sit amet',
			'Item_Recieved_Date' => '2015-10-22',
			'Libraries_Library_ID' => 1,
			'Item_Value' => 1
		),
	);

}
