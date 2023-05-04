<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('trip.json'), true);

    // Get form data
    $destination = $_POST['destination'];

    // Find user with matching email
    foreach ($data as $trip) {
        if ($trip['destination'] == $destination) {
             echo "Destination : ".$trip['destination'].'<br>';
             echo "Start date: ".$trip['start_date'].'<br>';
             echo "End date : ".$trip['end_date'].'<br>';
             echo "Budget: ".$trip['budget'].'<br>';
             echo '<br><br>';
        }
    }
    exit;
        // User not found
        echo 'Destiantion not found';
}