<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('trip.json'), true);

    $destination = $_POST['destination'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $budget = $_POST['budget'];


    foreach ($data as $value =>$key) {
            if ($key['destination']== $destination && 
                $key['start_date'] == $start_date &&
                $key['end_date'] == $end_date &&
                $key['budget'] == $budget
                ){
    
            unset($data[$value]);
            break;
        }
      
    }

    file_put_contents('trip.json', json_encode($data));

     header('location:adminHome.html');

}