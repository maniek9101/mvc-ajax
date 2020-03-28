<?php
    
    include 'models/dbmodel.php';

    define('host','localhost');
    define('user','root');
    define('password','');
    define('dbname','test');

    $conn = new mysqli(host, user, password, dbname);

    if ($conn -> connect_errno){
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }

    $db = new Dbmodel($conn);
