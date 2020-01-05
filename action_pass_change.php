<?php
    require_once('./config/init.php');
    include('./database/user.php');
 
    $user = $_SESSION['reg'];
    $username = $user['username'];
    
    
    $old_password = $_POST['old_password'];
    $password_new = $_POST['new_password'];

    change_user_pass($password_new, $old_password, $username);
    header('Location: user_page.php');
    
?>  