<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/dbConnect.php';
try{
    $sql = 'INSERT INTO autocomplete SET text = :text';
    $s = $pdo->prepare($sql);
    $s->bindValue(':text', $_POST['name']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error adding submitted author.';
    print $e;
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}