<?php

function getAllAppointments() {
  global $conn;
  $stmt = $conn->prepare('SELECT ID FROM Appointment' );
  $stmt->execute();
  return $stmt->fetchAll();
}

function isNutriAppointment($ID){
global $conn;
$stmt = $conn->prepare('SELECT * FROM Appointment WHERE Type=2');
$stmt->execute();
  return $stmt->fetchAll();
}

function isPhysicalAppointment($ID){
  global $conn;
    $stmt = $conn->prepare('SELECT * FROM Appointment WHERE Type=1');
    $stmt->execute();
    return $stmt->fetchAll();
  }


function getUserAppointmentPhysical($N_associate)
{
  global $conn;
  $stmt = $conn->prepare('SELECT ID FROM Appointment WHERE Given_to = ?');
  $stmt->execute(array($N_associate));
  return $stmt->fetchAll();

}

function createPhysical_Appointment($Type,$date,$Given_to, $Given_by, $Room)
{
  global $conn;
  $stmt = $conn->prepare('INSERT INTO Appointment (Type,date, Given_to, Given_by, Room) VALUES (?,?,?,?,?)');
  $user = $stmt->execute(array($Type,$date,$Given_to, $Given_by, $Room));
  return $user;
}
?>
