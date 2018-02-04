<?php

    $config = require 'config.php';
    echo print_r($config);
    $db = mysqli_connect(
            $config['database']['host'], $config['database']['username'], 
            $config['database']['password'], $config['database']['db']);

    $connection_message = "";

    if (!$db){
        $connection_message = "Unable to connect to the database.";
    } else if(!mysqli_set_charset($db, 'utf8')){
        $connection_message = "Unable to set database connection encoding.";
    } else {
        $connection_message = "Database connection established.";
    }

	$greeting = 'Hello, World!';
	echo '<h1>'.$greeting.'</h1>';
    echo '<p>' . $connection_message . '</p>';
?>
