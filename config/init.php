<?php
  session_start();
  global $conn;
  $conn = new PDO('sqlite:./sql/test.db');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  global $_SESSION;

?>