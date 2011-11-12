<?php
//define('QUINTACMS',1);

//require('../quinta_config.php');
require('../Quinta.class.php');
//require('OrderPrinter.class.php');
$objOrder = Order::Load(6609);
$objPrinter = new OrderPrinter($objOrder);
$objPrinter->PrintInvoice();

?>