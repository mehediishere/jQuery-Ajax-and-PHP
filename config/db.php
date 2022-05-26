<?php 
    $host = 'localhost';
    $dbname = 'testdb';
    $user = 'root';
    $pass = '';

    try {
        $conn = new mysqli($host, $user, $pass, $dbname);
        $date = date('Y-m-d');
    } catch (\mysqli_sql_exception $e) {
        throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    }
    unset($host, $dbname, $user, $pass);