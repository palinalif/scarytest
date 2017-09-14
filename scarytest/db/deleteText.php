<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/dbConnect.php';
try {
    $sql = 'DELETE FROM autocomplete WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
catch (PDOException $e){
    $error = 'Error delete category.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}
?>