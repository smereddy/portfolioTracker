<?php
App::uses('AppController', 'Controller');

/**
 * Customers Controller
 *
 * @property Customer $Customer
 */
class DataviewsController extends AppController {
    public $components = array('RequestHandler');
    public $belongsTo = array('Customer');
    public function customer($id = null) {

        $this->loadModel('Customer','Stock');
        if (!$this->Customer->exists($id)) {
            throw new NotFoundException(__('Invalid customer'));
        }
        $options = array('conditions' => array('Customer.' . $this->Customer->primaryKey => $id));
        // Send the customer to the view
        $this->set('customer', $this->Customer->find('first', $options));
       $this->set('_serialize',array('customer'));

    }

    public function returnPortfolioValue($customer_id = null) {
        // Don't use the default layout file.
        $this->layout = '';

        // Do some work get the customer's total port value.
        $this->loadModel('Customer','Stock');
        if ($this->Customer->exists($customer_id)) {
            // do work to create a sum total
            $options = array('conditions' => array('customer.' . $this->Customer->primaryKey => $customer_id));
            $customer = $this->Customer->find('first', $options);
            $stocks = $customer['Stocks'];
            $totalPort = 0;
            foreach ($stocks as $s) {
                $value = $s['noshares'] * $s['purchaseprice'];
                $totalPort += $value;
             }

            // Send information to view.
            $this->set('customer_id',$customer_id);
            $this->set('total_portfolio_value',$totalPort);


            // Use automagic routing: returnPortfolioValue/id.xml
            // Uncomment the next line if you want to use the magic .xml or .json extensins
            // $this->set('_serialize',array('customer_id','total_portfolio_value'));


        }

    }

    public function search() {

    }
}
?>