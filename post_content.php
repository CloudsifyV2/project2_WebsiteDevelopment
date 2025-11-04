<?php
 include 'components/navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/content.css">
  <title>Blogger </title>
</head>
<body>
  <div class="hero">
    <img src="images/image.png" alt="Tropical beach sunset">
    <div class="hero-overlay"></div>
  </div>

  <div class="container">
    <article class="article">
      <div class="article-content">
        
      <!-- Title -->
      <h1>Example testing title. Idk what to put here</h1>
      <div class="article-meta">
        <span class="author">By John Doe</span>
      </div>

      <div class="tags">
        <span class="tag">Travel</span>
        <span class="tag">Adventure</span>
        <span class="tag">Photography</span>
      </div>
      
      <div class="article-meta">
        <span class="date">Published on June 15, 2024</span>
      </div>

      <div class="separator"></div>

      <!-- Article Content -->
      <div class="article-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </article>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.querySelector('.navbar-toggle');
        const menu = document.querySelector('.navbar-menu');

        toggle.addEventListener('click', () => {
            toggle.classList.toggle('active');
            menu.classList.toggle('active');
        });
    });
  </script>
</body>
</html>