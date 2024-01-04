<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>HRIS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	 
	<style type="text/css">
		.dropdown-menu[data-bs-popper] {
		    top: 100% !important;
		    left: -110px !important;
		}
		.navbar-right{
			right: 100px;
			position: absolute;
		}
		/* .offcanvas-backdrop.show{
			opacity: none !important;
		} */
		.create_emp_div{
			padding: 0px 50px 50px 50px;
		}
		.tab-content{
			padding-top: 30px;
		}

	</style>
</head>
<body>
	<div id="container">