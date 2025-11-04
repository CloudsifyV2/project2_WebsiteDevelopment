<?php
session_start();
require_once __DIR__ . '/config/MySQL.php';
include 'components/navbar.php';

// Function to create a URL-friendly slug
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text); // replace non letters/digits by -
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    $text = strtolower($text);
    return empty($text) ? 'n-a' : $text;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/hub.css">
    <title>Bloggy</title>
</head>
<body>
<main class="container">
    <div class="blog-grid">
        <?php
        $sql = "SELECT * FROM posts ORDER BY date_posted DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $tagsArray = explode(',', $row['tags']);
                $slug = slugify($row['title']);
                $url = "post_content.php?id={$row['id']}&slug={$slug}";
                ?>
                <article class="blog-card" data-tags="<?php echo htmlspecialchars($row['tags']); ?>" onclick="window.location='<?php echo $url; ?>'">
                    <div class="blog-card-image-container">
                        <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="blog-card-image">
                    </div>
                    <div class="blog-card-header">
                        <div class="blog-card-tags">
                            <?php foreach ($tagsArray as $t): ?>
                                <span class="card-tag"><?php echo trim($t); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h2 class="blog-card-title"><?php echo htmlspecialchars($row['title']); ?></h2>
                    </div>
                    <div class="blog-card-content">
                        <p class="blog-card-excerpt"><?php echo htmlspecialchars($row['excerpt']); ?></p>
                        <p class="blog-card-date"><?php echo date('F j, Y', strtotime($row['date_posted'])); ?></p>
                    </div>
                </article>
                <?php
            }
        } else {
            echo '<p>No posts found.</p>';
        }
        $conn->close();
        ?>
    </div>
</main>
</body>
</html>
