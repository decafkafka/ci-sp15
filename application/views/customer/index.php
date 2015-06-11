<?php
/**
 * index.php is a view page for a generic Customer controller
 * 
 * It is used to show how to do CRUD in CodeIgniter
 *
 * views/customer/index.php
 * 
 * @package ITC260
 * @subpackage Customer
 * @author Young Han <yhan.ccs@gmail.com>
 * @version 1.0 2015/06/08 
 * @link http://www.younghan.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see Customer.php
 * @todo none
 */

$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>


<?php foreach ($query->result() as $customer): ?>

<?php
    echo $customer->FirstName . "<br />";
?>

<?php endforeach ?>



<?php
$this->load->view($this->config->item('theme') . 'footer');
?>










