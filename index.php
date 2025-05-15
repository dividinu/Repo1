<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Styled PHP Webpage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header id="main-header">
    <h1>My SAMPLE WEB</h1>
  </header>

  <div class="content">
    <?php
      // Define a function
      function greetUser($name) {
        return "Welcome, <span class='highlight'>$name</span>!";
      }

      // Define a list
      $hobbies = ["Reading", "Coding", "Gardening", "Traveling"];
     $PROFESSIONS = [
  "SCRIPT1" => "PHP",
  "html SCRIPT2" => "HTML",
  "javaSCRIPT3" => "JAVA",
  "python SCRIPT4" => "PYTHON"
];

    

      // Call the function
      echo "<p class='greeting'>" . greetUser("DIVYA") . "</p>";
    ?>

    <div id="hobby-section">
      <h2>My Hobbies:</h2>
      <ul>
        
        <?php
        foreach ($PROFESSIONS as $key => $value) {
    
     echo "<li class='professions-item' . $key. PHP_EOL>";  "</li>";
    
        }
    ?>
      </ul>
    </div>
  </div>
    

  <footer>
    <p>&copy; <?php echo date("d/F/Y"); ?> divya Portfolio</p>
  </footer>
</body>
</html>
