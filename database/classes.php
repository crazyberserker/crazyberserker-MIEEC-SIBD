<?php

function getAllClasses() {
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM Class' );
  $stmt->execute();
  return $stmt->fetchAll();
}

function getMondayClasse(){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM Class WHERE Day = "MON"');
  $stmt->execute();
  $user = $stmt->fetch();
  var_dump($user);
  return $user;

}

?>