<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd'
) or die(mysqli_erro($mysqli));

?>

