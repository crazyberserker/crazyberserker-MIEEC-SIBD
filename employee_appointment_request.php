<?php
    require_once('./config/init.php');
    include('./database/appointment.php'); 
    
    $type=$_POST['Type'];
    $date = $_POST['date'];
    $Given_to = $_POST['Given_to'];
    $Given_by = $_POST['Given_by'];
    $Room = $_POST['Room'];


    if(createPhysical_Appointment($type,$date,$Given_to, $Given_by, $Room))
    {
        $_SESSION['date'] = $date;
        $_SESSION['Given_to'] = $Given_to;
        $_SESSION['Given_by'] = $Given_by;
        $_SESSION['Room'] = $Room;
        header('Location: utilities_PT_page.php');
    }
    else
    header('Location:error.php');
        

    
    
?>  