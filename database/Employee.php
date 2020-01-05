<?php

function createUser_Employee($ID_EMPLOYEE, $Start_date, $Languages, $Position, $Degree, $Experience)
{
    global $conn;
    $stmt = $conn->prepare('INSERT INTO Employee (ID_EMPLOYEE, Start_date, Languages, Position, Degree, Experience) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($ID_EMPLOYEE, $Start_date, $Languages, $Position, $Degree, $Experience));  
    return $stmt;
}
function am_I_PT($ID_EMPLOYEE)
{
    global $conn;
    $stmt = $conn->prepare('SELECT *
    FROM Employee WHERE (ID_EMPLOYEE = ?) WHERE Position Like '%PT%'');
    $stmt->execute(array($ID_EMPLOYEE));
    $user = $stmt->fetch();
    return $user;
    //var_dump($user);
}

function user_getID($username, $password)
{
  global $conn;
  $stmt = $conn->prepare('SELECT ID FROM Person WHERE username = ?');
  $stmt->execute(array($username));
  $user = $stmt->fetch();
  return $user;
}

function employ($ID){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM Employee WHERE ID_EMPLOYEE =?');
  $stmt->execute(array($ID));
  return $user = $stmt->fetch();
  var_dump($user);
}



?>
