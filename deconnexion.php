<?php
session_start();
	if (isset($_SESSION['connected']))
		  $_SESSION['connected'] = false;
	if (isset($_SESSION['ip']))
                $_SESSION['ip'] = null;
	header('Location: index.php');
?>
