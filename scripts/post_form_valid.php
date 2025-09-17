<?php

include 'config/database.php';

$title = $_POST['title'];
$description = $_POST['description'];
$post_text = $_POST['post_text'];

$sanTitle = htmlentities(string: $title);
$sanDesc = htmlentities(string: $description);
$sanPostText = htmlentities(string: $post_text);

$sql = "INSERT INTO posts (title, description, post_text) VALUES ('$sanTitle', '$sanDesc', '$sanPostText')";

if ($conn->query(query: $sql) === TRUE) {
    echo "Your post has been posted.";
    echo "<a href='list_posts.php'>Back to posts</a>";
} else {
    echo "Error " . $sql . "<br>" . $conn->error;
}


?>