<?php
highlight_file(__FILE__);
error_reporting(0);
ini_set('session.serialize_handler','php_serialize');
session_start();
$_SESSION['ben'] = $_GET['a'];
?>