<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.plan_price{
	padding: 25px;
	border-top: 1px solid #eeeeee;
	display: flex;
	flex-direction: column;
}
.booking_button{
	display: inline-block;
	margin:15px auto;
	padding: 8px 20px;
	text-decoration: none;
	color: #0066db;
	background: #ffffff;
	border-radius: 5px;
	border: 1px solid #0066db;
	text-transform: uppercase;
	letter-spacing: 0.02em;
	font-weight: bold;
	transition: 0.3s;
}
.booking_button:hover{
	background: #0066db;
	color: #ffffff;
	transition: 0.3s;

}
.sort-form {
  float: right;
  list-style: none;
  margin-top: 10px;
  margin-right: 15px;
}

.sort-form input[type="submit"] {
  color: black;
  text-decoration: none;
  padding: 10px 50px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

.sort-form input[type="submit"]:hover {
  background:#0066db;
  color: rgb(255, 255, 255);
}
     </style>
</head>
<body>   
</body>
</html>
<?php
if(isset($_POST['trips'])){
    $data = json_decode(file_get_contents('trip.json'), true);?>
<form class="sort-form" action="userHome.php"method="post">
<input type="submit"name="sort"value="Sort by price">
</form>
    <?php
    echo '<br><br><br>';
    // Find user with matching email
    foreach ($data as $trip) {
        
             
             echo "<center><h1>Destination : ".$trip['destination'].'<br></h1>';
             echo '<img src="'.$trip['destination_photo'].'" alt="'.$trip['destination'].'" width="350"> <br>';
             echo "<h3>Start date: ".$trip['start_date'].'<br></h3>';
             echo "<h3>End date : ".$trip['end_date'].'<br></h3>';
             echo "<h3>Budget: ".$trip['budget'].'<br></h3></center>';
             ?>
             <div class="plan_price">
				<span id="btn1" class="booking_button"data-tippy-content="Book Now">Book Now</span>
			</div>
             <?php
               echo '<br>';
               echo'<hr>';

        
    }?>
    <center><button><a href="UserHome.html">Back</a></button></center>
    <?php

    exit;
}
elseif(isset($_POST['sort'])) {

    $data = json_decode(file_get_contents('trip.json'), true);

    function compare_budget($a, $b) {

        return $a['budget'] - $b['budget'];
    }

    usort($data, 'compare_budget');

    foreach ($data as $trip) {
        echo '<br>';
        echo "<center><h1>Destination : " . $trip['destination'] . '<br></h1>';
        echo '<img src="' . $trip['destination_photo'] . '" alt="' . $trip['destination'] . '" width="350"> <br>';
        echo "<h3>Start date: " . $trip['start_date'] . '<br></h3>';
        echo "<h3>End date : " . $trip['end_date'] . '<br></h3>';
        echo "<h3>Budget: " . $trip['budget'] . '<br></h3></center>';
        ?>
        <div class="plan_price">
				<span id="btn1" class="booking_button"data-tippy-content="Book Now">Book Now</span>
		</div>
        <?php
        echo '<hr>';
    }
?>
    <center><button><a href="UserHome.html">Back</a></button></center>
<?php
    exit;
}
elseif(isset($_POST['logout'])){
    header('location:logout.php');
}
?>

