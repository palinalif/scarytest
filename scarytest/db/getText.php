<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/dbConnect.php';

try{
    $result = $pdo->query('SELECT id, text FROM autocomplete');
}
catch (PDOException $e){
    $error = 'Error fetching text details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    print $e;
    exit();
}
?>