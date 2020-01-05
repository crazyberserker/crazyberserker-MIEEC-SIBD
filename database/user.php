<?php
    
function isValid($username, $password){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM Person WHERE username = ?');
  $stmt->execute(array($username));
  $user = $stmt->fetch();
  //var_dump($user);

  if($user!=FALSE)
  {
     if(password_verify($password, $user['password']))
     {
       $_SESSION['reg'] = $user;
       $_SESSION['isLog'] = TRUE;
  
      return TRUE;
     }
     else  
       return FALSE;
}
  else return FALSE;
}

  function createUser($username, $password, $First_name, $Last_name, $Sex, $Adress, $Phone_number, $Age)
  {
    global $conn;
    $hash = password_hash($password, 2);
    $stmt = $conn->prepare('INSERT INTO Person (username, password, First_name, Last_name, Sex, Adress, Phone_number, Age) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($username, $hash, $First_name, $Last_name, $Sex, $Adress, $Phone_number, $Age));
    if(isValid($username, $password))
    {
      return TRUE;
    }
    else
      return FALSE;
  }


function changeFirst_name($First_name, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET First_name = ? WHERE username= ?');
  $stmt->execute(array($First_name, $username));
}
function changeLast_name($Last_name, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Last_name = ? WHERE username= ?');
  $stmt->execute(array($Last_name, $username));
}

function changeAdress($Adress, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Adress= ? WHERE username= ?');
  $stmt->execute(array($Adress, $username));
}

function changePhone_number($Phone_number, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Phone_number= ? WHERE username= ?');
  $stmt->execute(array($Phone_number, $username));
}
function changeAge($Age, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Age= ? WHERE username= ?');
  $stmt->execute(array($Age, $username));
}
function changeEmail($Email, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Email= ? WHERE username= ?');
  $stmt->execute(array($Email, $username));
}
function changeHealth_insurance_number($Health_insurance_number, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Health_insurance_number= ? WHERE username= ?');
  $stmt->execute(array($Health_insurance_number, $username));
}
function changeIntolerance($Intolerance, $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Intolerance= ? WHERE username= ?');
  $stmt->execute(array($Intolerance, $username));
}
function changeAllergies ($Allergies , $username) {
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET Allergies = ? WHERE username= ?');
  $stmt->execute(array($Allergies , $username));
}

function change_user_pass($password_new, $old_password, $username)
{
  global $conn;
  $stmt = $conn->prepare('UPDATE Person SET password = ? WHERE username = ?');
  $hash = password_hash($password_new, 2);
  $stmt->execute(array($hash,$username));
}
function isEmployee($username)
{
  global $conn;
  $stmt = $conn->prepare('SELECT ID
  FROM Person WHERE (username = ?) INTERSECT SELECT ID_EMPLOYEE FROM Employee');
  $stmt->execute(array($username));
  $user = $stmt->fetch();
  return $user;
  //var_dump($user);

}


?>
