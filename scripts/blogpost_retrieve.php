<?php

include 'config/database.php';

$SQL = "SELECT * FROM posts";

$result = $conn->query(query: $SQL);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['post_text'] . "</h2>";
    }
} else {
    echo "No Results found.";
}