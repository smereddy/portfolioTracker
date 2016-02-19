<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Trans_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Appeal_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Trans_Amount' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'Trans_Time_Date' => array('type' => 'date', 'null' => true, 'default' => null),
		'Trans_Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Transaction_Token' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'Notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Trans_ID', 'unique' => 1),
			'Donor_ID' => array('column' => 'Donor_ID', 'unique' => 0),
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
			'Trans_ID' => 1,
			'Library_ID' => 1,
			'Item_ID' => 1,
			'Appeal_ID' => 1,
			'Donor_ID' => 1,
			'Trans_Amount' => 1,
			'Trans_Time_Date' => '2015-11-19',
			'Trans_Type' => 'Lorem ipsum dolor sit amet',
			'Transaction_Token' => 1,
			'Notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
