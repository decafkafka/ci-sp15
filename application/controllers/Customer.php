<?php
/**
 * Customer.php is a controller for a generic Customer
 * 
 * It is used to show how to do CRUD in CodeIgniter
 * 
 * @package ITC260
 * @subpackage Customer
 * @author Young Han <yhan.ccs@gmail.com>
 * @version 1.0 2015/06/08 
 * @link http://www.younghan.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see index.php
 * @todo none
 */

/**
 * Customer controller for our CRUD demo

 * @see Customer_model
 * @todo none
 */
class Customer extends CI_Controller {

    /**
     * Loads default data into object
     *
     * Added in v3 - Result object
     *
     * @param none
     * @return void
     * @todo none
     */
    public function __construct()
    {//everything here is global to all methods in the controller
        parent::__construct();
        /*
        $this->load->model('news_model');
        $this->config->set_item('banner', 'Global News Banner');
        */
    }#end constructor

    /**
     * Shows initial Customer Database data
     *
     * @param none
     * @return void
     * @todo none
     */
    public function index()
    {
            //$data['news'] = $this->news_model->get_news();
            $data['title'] = 'Customer';
            $this->load->view('customer/index', $data);
        
    }#end index()

}#end Customer class/controller