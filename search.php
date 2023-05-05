<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('trip.json'), true);

    // Get form data
    $destination = $_POST['destination'];

    // Find user with matching email
    foreach ($data as $trip) {
        if ($trip['destination'] == $destination) {
             
             echo "<center><h1>Destination : ".$trip['destination'].'<br></h1>';
             echo '<img src="'.$trip['destination_photo'].'" alt="'.$trip['destination'].'" width="350"> <br>';
             echo "<h3>Start date: ".$trip['start_date'].'<br></h3>';
             echo "<h3>End date : ".$trip['end_date'].'<br></h3>';
             echo "<h3>Budget: ".$trip['budget'].'<br></h3></center>';
             echo '<br>';
             echo'<hr>';
        }
    }?>
    <center><button><a href="search.html">Back</a></button></center>
    <?php

    exit;
        // User not found
        echo 'Destiantion not found';
}
