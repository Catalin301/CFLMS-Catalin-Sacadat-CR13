<?php
session_start();
if (!isset($_SESSION['admin'])) {
 header( "Location: login.php");
}  else if(isset($_SESSION[ 'admin'])!="" && $_SESSION['admin'] == 1) {
 header("Location: admin.php");
} else if(isset($_SESSION[ 'admin'])!="") {
 header("Location: index.php");
} 

if  (isset($_GET['logout'])) {
 unset($_SESSION['admin' ]);
 session_unset();
 session_destroy();
 header("Location: login.php");
 exit;
}
?>