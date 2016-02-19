<?php
/**
 * MemorialFixture
 *
 */
class MemorialFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'memorial';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'Mem_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'Library_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Donor_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'Item_ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'Party_Memorialized' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Description' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Memorial_Inscription' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'Mem_ID', 'unique' => 1),
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
			'Mem_ID' => 1,
			'Library_ID' => 1,
			'Donor_ID' => 1,
			'Item_ID' => 1,
			'Party_Memorialized' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet',
			'Memorial_Inscription' => 'Lorem ipsum dolor sit amet'
		),
	);

}
