<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('users.json'), true);

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //Validate form data
    if (empty($name) || empty($email) || empty($password)) {
        die("Please fill out all fields.");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }


    // Check if email already exists
    foreach ($data as $user) {
        if ($user['email'] == $email) {
            echo 'Email already exists';
            exit;
        }
    }

    // Add new user to data array
    $data[] = array(
        'name' => $name,
        'email' => $email,
        'password' => $password
    );

    // Save data to JSON file
    file_put_contents('users.json', json_encode($data));

    echo 'Registration successful!';
    // Redirect user to login page
    header('Location: login.html');
    exit();
}
