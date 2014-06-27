<?php  

$sessionName = session_name();
$a=$_GET[$sessionName];
session_id($a); 
session_start(); 
print_r ($_SESSION); 

?>