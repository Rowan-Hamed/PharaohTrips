<?php

if (isset($_POST['trips'])) {

    $data = json_decode(file_get_contents('trip.json'), true);

    function compare_budget($a, $b) {

        return $a['budget'] - $b['budget'];
    }

    usort($data, 'compare_budget');

    foreach ($data as $trip) {

        echo "<center><h1>Destination : " . $trip['destination'] . '<br></h1>';
        echo '<img src="' . $trip['destination_photo'] . '" alt="' . $trip['destination'] . '" width="350"> <br>';
        echo "<h3>Start date: " . $trip['start_date'] . '<br></h3>';
        echo "<h3>End date : " . $trip['end_date'] . '<br></h3>';
        echo "<h3>Budget: " . $trip['budget'] . '<br></h3></center>';
        echo '<br>';
        echo '<hr>';
    }
?>
    <center><button><a href="youssef.html">Back</a></button></center>
<?php
    exit;
}
?>
