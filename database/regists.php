<?php


function createRegist($Name , $EMAIL, $PHONE, $mes)
  {
    global $conn;
    $stmt = $conn->prepare('INSERT INTO Regist (Name , EMAIL, PHONE, mes) VALUES (?, ?, ?, ?)');
    return $stmt->execute(array($Name, $EMAIL, $PHONE, $mes));
  }

function showRegists(){
  global $conn;
  $stmt =$conn->prepare('SELECT * FROM Regist');
  $stmt->execute();
  return $stmt->fetchAll();
  
}


?>