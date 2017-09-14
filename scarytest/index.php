<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/worker.php';
?>
<?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Text stuff I dunno</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/background.css">
    <link rel="stylesheet" type="text/css" href="../css/text.css">-->
</head>

<body id = "authorbody">
<h1 class = "header" id = "authorheader">Manage Text I guess??</h1>
<p class = ""><a href = "../scarytest/worker.php?add">Add new thing</a></p>

<ul>
    <?php foreach ($texts as $text): ?>
    <li id = "authorli">
        <form action = "" method = "post">
            <div>
                <?php echo html($text['text']);?>
                <input type = "hidden" name = "id" value = "<?php echo $text['id']?>">
                <input type = "submit" name = "action" value = "Edit">
                <input type = "submit" name = "action" value = "Delete">
            </div>
        </form>
    </li>
</ul>
<?php endforeach;?>
<p><a href = "..">Return to JMS Home</a></p>
</body>
</html>