<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/dbConnect.php';

try{
    $sql = 'SELECT id, text FROM autocomplete WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error fetching author details.' . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}

$row = $s->fetch();
