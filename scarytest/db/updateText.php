<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/dbConnect.php';
try{
    $sql = 'UPDATE autocomplete SET text = :text WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':text', $_POST['name']);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error updating submitted author.';
    echo $e;
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}
?>