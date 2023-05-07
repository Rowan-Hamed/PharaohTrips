<?php
 session_start();

 if (($_SESSION['username']=="Admin") &&
 ($_SESSION['email']=='Admin@gmail.com')&&
 ($_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT)))

{
 header('location:adminHome.php');
} elseif($_SESSION['username']!="Admin") {
header('location:userHome.php');
}
