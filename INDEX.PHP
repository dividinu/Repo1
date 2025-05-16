<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <?php include 'includes/header.php'; ?>

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

    <?php include 'includes/footer.php'; ?>
  </div>
</body>
</html>
