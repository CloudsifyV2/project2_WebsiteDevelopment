<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $title = $_POST['title'];
    $postText = $_POST['post_text'];
    
    echo $title;
    ?>
    <br>
    <?php
    echo $postText;

    ?>
</body>
</html>