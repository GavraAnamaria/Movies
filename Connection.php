<?php
        $db_host='localhost';
        $db_username='siminapopescu';
        $db_pass='';
        $dbname='facultate';

   
        $conn = new mysqli($db_host, $db_username, $db_pass, $dbname);
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
    
        
?>
