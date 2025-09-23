<?php
include '../includes/database.php';

$post_id = $_GET['id'];

// I wasn't sure this was working properly so I just echoed it to make sure I had the correct value.
//echo $post_id;

echo '<style> body { width: 400px; } img { height: 200px; width 100%; margin: 5px 0 5px 0; object-fit: cover; display: block; } </style>';

$sql = "SELECT title, post_text FROM posts WHERE id = '$post_id'";
$result = $conn->query(query:$sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<section class="">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['post_text'] . '</p>';
        echo '</section>';
    }
} else {
    echo 'Post not found!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Bloggy, initial-scale=1.0">
    <title>Bloggy</title>
</head>
<body>
    
</body>
</html>