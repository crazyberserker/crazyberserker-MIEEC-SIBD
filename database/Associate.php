<?php
function getID($username, $password)
{
  global $conn;
  $stmt = $conn->prepare('SELECT ID FROM Person WHERE username = ?');
  $stmt->execute($ID);
  $user = $stmt->fetch();
  return $user;
}

function associated($ID){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM Associate WHERE N_associate =?');
  $stmt->execute(array($ID));
  return $user = $stmt->fetch();
  var_dump($user);
}
?>