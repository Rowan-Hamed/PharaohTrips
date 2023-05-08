<?php

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $data = json_decode(file_get_contents('trip.json'), true);

    
    $destination = $_POST['destination'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $budget = $_POST['budget'];
    $destination_photo =$_POST['destination_photo'];


    if (empty($destination) || empty($start_date) || empty($end_date) || empty($budget)) {
        die("Please fill out all fields.");
    }
    $data[] = array(
        'destination' => $destination,
        'destination_photo' => $destination_photo,
        'start_date' => $start_date ,
        'end_date' =>  $end_date ,
        'budget' => $budget
        
    );


   
    foreach ($data as $key => $item) {
        $data[$key]['id'] = uniqid();
    }
    
    $json = json_encode($data);



    file_put_contents('trip.json', json_encode($data));
    
    header('Location:adminHome.html');
    exit();
}

?>


