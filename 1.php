<?php  
session_start(); 
$_SESSION['username']="CCCCCCCCCCCCCCCCCCCCCCCCC"; 
$sn = session_id(); 

echo $sn; 

?>