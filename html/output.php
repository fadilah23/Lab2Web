<?php
$name = $_POST['name'];
$dob = new DateTime($_POST['dob']);
$now = new DateTime();
$interval = $now->diff($dob);
$age = $interval->y;
$job = $_POST['job'];
$salary = 0;

switch ($job) {
  case 'developer':
    $salary = 5000;
    break;
  case 'designer':
    $salary = 4000;
    break;
  case 'manager':
    $salary = 6000;
    break;
  default:
    echo "Invalid job selection.";
    exit();
}

echo "<p>Hello, $name!</p>";
echo "<p>Your age is $age.</p>";
echo "<p>Your salary as a $job is $salary/month.</p>";
?>