<?php
include '../includes/database.php';

session_start();
$_SESSION['user_id'] = 1;
$_SESSION['username'] = "admin";
$_SESSION['logged_in'] = true;
$_SESSION['role'] = "admin";

$role = $_SESSION['role'];
$logged_in = $_SESSION['logged_in'];

$SQL = "SELECT id, title, description FROM posts";
$result = $conn->query(query:$SQL);

echo '<style> section { background-color:lightblue; display: block; } </style>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<section class="">';
        echo '<p><a href="retrieve_post.php?id=' . $row['id'] . '">' . $row['title'] . '</a>:<br>';
        echo $row['description'] . "</>";
        if ($role == 'admin') {
            echo '<br><a href="edit_post_form.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_post.php?id=' . $row['id'] . '">Delete</a>';
        }
        echo "</section>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy</title>
</head>
<body>
    
</body>
</html>