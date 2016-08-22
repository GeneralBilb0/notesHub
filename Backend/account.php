<?php
// define variables
$name = $email = $password = $confirmPassword = $yearLevel = $studentNumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = testInput($_POST["inputFullName"]);
  $email = testInput($_POST["inputEmail"]);
  $password = testInput($_POST["inputPassword"]);
  $confirmPassword = testInput($_POST["inputConfirmPassword"]);
  $yearLevel = testInput($_POST["inputYearLevel"]);
  $studentNumber = testInput($_POST["inputID"])
}

function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
