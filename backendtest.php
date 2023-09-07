<?php
// Check if both number1 and number2 are set in the URL
if (isset($_GET['number1']) && isset($_GET['number2'])) {
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];


// Add the two numbers together
$sum = $number1 + $number2;
// Redirect back to index.html with the sum as a query parameter
header("Location: test.php?sum=$sum");
exit;
} else {
echo "Please fill out both number fields and submit the form.";
}
?>
