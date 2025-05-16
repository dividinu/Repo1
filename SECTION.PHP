<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Simple PHP Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <header>
      <h1>My Website</h1>
      <nav>
        <a href="?page=home">Home</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
      </nav>
    </header>

    <main>
      <?php
        $page = $_GET['page'] ?? 'home';

        if ($page === 'about') {
          include 'about.php';
        } elseif ($page === 'contact') {
          include 'contact.php';
        } else {
          include 'home.php';
        }
      ?>
    </main>

    <footer>
      <p>&copy; 2025 My Website</p>
    </footer>
  </div>
</body>
</html>
