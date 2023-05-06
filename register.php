  <!-- isset($_POST['sign up']) -->
  <?php
if ( ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $data = json_decode(file_get_contents('users.json'), true);

    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo '<center><h1>Invalid email address</h1></cenetr>';
     ?>
    <!-- // <center><button><a href="regpage.html">Back</a></button></center> -->
        <?php
    //     exit();
    // }
    

    // Check if email already exists
    foreach ($data as $user) {
        if ($user['email'] == $email) {
            echo '<center><h1>Email already exists</h1></center>';
            ?>
             <center><button><a href="regpage.html">Try again</a></button></center>
            <?php
            exit();
        }
    }
    
    // Add new user to data array
    $data[] = array(
        'username' => $username,
        'email' => $email,
        'password' => $password
    );
    
    // Save data to JSON file
    file_put_contents('users.json', json_encode($data));

    echo 'Registration successful!';
    // Redirect user to login page
    header('Location:LoginPage.html');
    exit();
  
    
}
?>
