<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="navbar-container">
        <a href="#" class="navbar-logo">
            <span>Bloggy</span>
        </a>
        
        <ul class="navbar-menu">
            <li><a href="hub.php" class="active">Home</a></li>
            <li><a href="#">Create</a></li>
            <li><a href="#">Find</a></li>
            <li><a href="#">Manage</a></li>
        </ul>

        <div class="navbar-actions">
            <button class="navbar-search" aria-label="Search">
            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            </button>
            <div class="user-avatar">C</div>
        </div>

        <button class="navbar-toggle" id="navbarToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.querySelector('.navbar-toggle');
        const menu = document.querySelector('.navbar-menu');

        if (toggle && menu) {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('active');
                menu.classList.toggle('active');
            });
        }
    });
  </script>
</body>
</html>