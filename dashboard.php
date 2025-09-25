<?php
session_start();
$users = [
  "djamaie" => ["password" => "ligature2025", "role" => "animateur"],
  "jouad" => ["password" => "refJ2025", "role" => "coordinateur"]
];

$user = $_POST['username'];
$pass = $_POST['password'];

if (isset($users[$user]) && $users[$user]['password'] === $pass) {
  $_SESSION['role'] = $users[$user]['role'];
  echo "<h1>Bienvenue $user (" . $_SESSION['role'] . ")</h1>";
  include("incident_form.html");
} else {
  echo "<h2>Accès refusé</h2>";
}
?>
