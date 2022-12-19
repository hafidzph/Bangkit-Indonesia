<?php
session_start(); 
if (!isset($_SESSION["id"])) {
  header("Location: login_user.html");
  exit;
}
?>