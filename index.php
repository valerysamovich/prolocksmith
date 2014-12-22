<?php 

// Error Reporting functions
// error_reporting(E_ALL);
// print_r($_POST);

//  Make sure that the pagelet variable is set with $var = 
$pagelet = (isset($_GET['pagelet']) ? $_GET['pagelet'] : "index");

require ("includes/language.inc.php");
require ("includes/functions.inc.php");
   
// Pull in the page header.
include ("includes/header.inc.php");

// Pull in the page navigation.
include ("includes/navigation.inc.php");

// Pull in the page content - pagelet
include ("pagelets/$pagelet.inc.php");

// Pull in the page footer.
include ("includes/footer.inc.php");

?>