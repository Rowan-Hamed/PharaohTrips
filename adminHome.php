<?php
if(isset($_POST['search'])){
    $data = json_decode(file_get_contents('trip.json'), true);

    $destination = $_POST['destination'];


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
    <center><button><a href="adminHome.html">Back</a></button></center>
    <?php

    exit;
    
        echo 'Destiantion not found';
}
elseif (isset($_POST['trips'])) {
    $data = json_decode(file_get_contents('trip.json'), true);


    foreach ($data as $trip) {
        
             
             echo "<center><h1>Destination : ".$trip['destination'].'<br></h1>';
             echo '<img src="'.$trip['destination_photo'].'" alt="'.$trip['destination'].'" width="350"> <br>';
             echo "<h3>Start date: ".$trip['start_date'].'<br></h3>';
             echo "<h3>End date : ".$trip['end_date'].'<br></h3>';
             echo "<h3>Budget: ".$trip['budget'].'<br></h3></center>';
             echo '<br>';
             echo'<hr>';
        
    }?>
    <center><button><a href="search.html">Back</a></button></center>
    <?php

    exit;

}elseif(isset($_POST['users'])){
    header('location:adminHome.html');
}elseif(isset($_POST['profile'])){
    header('location:profile.html');
}elseif(isset($_POST['logout'])){
    header('location:logout.php');
}elseif(isset($_POST['add'])){
    header('location:adminadd.html');
}elseif(isset($_POST['remove'])){
    header('location:adminRemove.html');
}