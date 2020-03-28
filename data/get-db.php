<?php

    include 'config.php';

    if(isset($_POST['order']) && isset($_POST['by']))
    {
        $result = $db->getAllDbBy($_POST['order'], $_POST['by']);
        echo 'aaaa';
    }
    else
    {
        $result = $db->getAllDb();
    }

    