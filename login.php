<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('users.json'), true);

    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($data as $user) {
        if ($user['email'] == $email) {
    
            if (password_verify($password, $user['password'])) {
                echo 'Login successful!';
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['password'] = $user['password'];
                header('Location:dashboard.php');

            } else {
                echo'<center><h1>Invalid password</h1><center>';
                ?>
                <center><button><a href="LoginPage.html">Try again</a></button></center>
                <?php
                exit();
            }
        }
    }
    
   echo '<center><h1>User not found</h1></center>'; 
   ?>
    <center> <button><a href="LoginPage.html">Try again</a></button></center>
   <?php
   exit();
}
?>


















<!-- <?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $data = json_decode(file_get_contents('users.json'), true);

//     // Get form data
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Find user with matching email
//     foreach ($data as $user) {
//         if ($user['email'] == $email) {
//             // Verify password
//             if (password_verify($password, $user['password'])) {
//                 echo 'Login successful!';
//                 session_start();
//                 $_SESSION['username'] = $user['username'];
//                 $_SESSION['email'] = $user['email'];
//                 $_SESSION['password'] = $user['password'];
//                  header('Location:dashboard.php');
               
//             } else {
//                 die('<center><h1>Invalid password</h1><center>');?>
//                 <button type="submit"name="Back">Sign up</button>
//             <?php
            
//     }
//    // User not found
// echo 'User not found'; 
// }
?> -->