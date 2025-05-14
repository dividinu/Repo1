<?php
// This is a PHP script that prints "Hello, World!"
echo "Hello, World!";

// This is a comment explaining the code
// The following line prints the current date and time
echo "Current date and time: " . date("Y-m-d H:i:s");
// This is a multi-line comment
/*
This is a multi-line commen
It can span multiple lines
*/
?>
<?php
// Set background color using a PHP variable
$bgColor = "#d1e7dd"; // Light greenish background
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Background Color</title>
</head>
<body style="background-color: <?php echo $bgColor; ?>;">

    <h1>Welcome to My PHP Page</h1>
    <p>The background color is dynamically set using PHP.</p>

</body>
</html>


