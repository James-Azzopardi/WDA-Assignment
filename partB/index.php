<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
    	<?php
		require_once('db_connect.php');
		if(!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)){
			echo 'Could not connect to mysql on ' . DB_HOST . '\n';
			exit;
		}
		echo 'Connected to mysql <br />';
		if(!mysql_select_db(DB_NAME, $dbconn)){
			echo 'Could no use database ' . DB_NAME . '\n'
			echo mysql_error() . '\n';
			exit;
		}
		echo 'Connected to database ' . DB_NAME . '\n';
	?>
      
    </body>
</html>
