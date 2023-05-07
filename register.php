 <?php
if ( ($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $data = json_decode(file_get_contents('users.json'), true);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

    foreach ($data as $user) {
        if ($user['email'] == $email) {
            echo '<center><h1>Email already exists</h1></center>';
            ?>
             <center><button><a href="regpage.html">Try again</a></button></center>
            <?php
            exit();
        }
    }
    
    $data[] = array(
        'username' => $username,
        'email' => $email,
        'password' => $password
    );

    foreach ($data as $key => $item) {
        $data[$key]['id'] = uniqid();
    }
    
    file_put_contents('users.json', json_encode($data));

    echo 'Registration successful!';

    header('Location:LoginPage.html');
    exit();   
}
?>




