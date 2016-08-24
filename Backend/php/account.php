<?php
// define variables
$name = $email = $password = $confirmPassword = $yearLevel = $studentNumber = "";

// Strips unnecessary characters
function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = testInput($_POST["inputFullName"]);
  $email = testInput($_POST["inputEmail"]);
  $password = testInput($_POST["inputPassword"]);
  $confirmPassword = testInput($_POST["inputConfirmPassword"]);
  $yearLevel = testInput($_POST["inputYearLevel"]);
  $studentNumber = testInput($_POST["inputID"]);
}

console_log($name);
console_log($email);
console_log($password);
console_log($confirmPassword);
console_log($yearLevel);
console_log($studentNumber);
?>
