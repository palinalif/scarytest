<?php

if (isset($_GET['add'])){
    $pageTitle = 'New text';
    $action = 'addtext';
    $name = '';
    $id = '';
    $button = 'Add text';
    include 'form.php';
    exit();
}
if (isset($_GET['addtext'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/insertText.php';
    header('Location: .');
    exit();
}

if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/getTextWhereId.php';
    $pageTitle = 'Edit text';
    $action = 'edittext';
    $name = $row['name'];
    $id = $row['id'];
    $button = 'Update text';
    include 'form.php';
    exit();
}

if (isset($_GET['edittext'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/updateText.php';
    header('Location: .');
    exit();
}

if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/deleteText.php';
    header('Location: .');
    exit();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/db/getText.php';

foreach ($result as $row) {
    $texts[] = array('id' => $row['id'], 'text' => $row['text']);
}