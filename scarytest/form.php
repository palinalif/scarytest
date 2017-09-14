<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/scarytest/workers/htmlSpecialChars.php';

?>

<!--Það er villa hérna, ef þú gerir var_dump á updateText.php þá sérðu að id breytan er strengurinn frá button value,
ef þú breytir nafninu í button name dæminu þá breytist það líka í var dumpinu, get ekki lagað það ein svo að ég ætla bara
að skila því-->

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title><?php echo html($pageTitle); ?></title>
</head>
<body>
<h1><?php echo html($pageTitle); ?></h1>
<form action = "?<?php echo html($action); ?>" method = "post">
    <div>
        <label for = "name">Name: <input type = "text" name = "name" id = "id" value = "<?php echo html($name);?>"</label>
    </div>
    <div>
        <input type = "submit" name = "button" value = "<?php echo html($button); ?>"
    </div>
</form>
</body>
</html>
