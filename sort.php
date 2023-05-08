<?php

// Decode the JSON data into an array
$data = json_decode($json_data, true);

// Define a comparison function for sorting by budget
function compare_budget($a, $b) {
    return $a['budget'] - $b['budget'];
}

// Sort the array by budget
usort($data, 'compare_budget');

// Encode the sorted array back into JSON
$sorted_json_data = json_encode($data);


-------------------------------------------------------------------------------------------------------------
// Read the file contents into an array
$file_contents = json_decode(file_get_contents('file.json'), true);

// Get the number of elements in the array
$count = count($file_contents);

// Bubble sort the array by budget
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - 1; $j++) {
        if ($file_contents[$j]['budget'] > $file_contents[$j + 1]['budget']) {
            // Swap the elements
            $temp = $file_contents[$j];
            $file_contents[$j] = $file_contents[$j + 1];
            $file_contents[$j + 1] = $temp;
        }
    }
}

// Write the sorted array back to the file
file_put_contents('file.json', json_encode($file_contents));
--------------------------------------------------------------------------------------------------------------------------------
// Define the data array
$data = array(
    "2" => array(
        "destination" => "cairo",
        "destination_photo" => "https://img.theculturetrip.com/wp-content/uploads/2021/07/c49y89-e1626878574776.jpg",
        "start_date" => "2023-05-17",
        "end_date" => "2023-05-20",
        "budget" => "1222",
        "id" => "6456900255f4d"
    ),
    "3" => array(
        "destination" => "cairo",
        "destination_photo" => "https://img.theculturetrip.com/wp-content/uploads/2021/07/c49y89-e1626878574776.jpg",
        "start_date" => "2023-05-17",
        "end_date" => "2023-05-20",
        "budget" => "1222",
        "id" => "64569002562c2"
    ),
    "4" => array(
        "destination" => "luxor",
        "destination_photo" => "https://media-cdn.tripadvisor.com/media/photo-s/03/9b/2f/5b/cairo.jpg",
        "start_date" => "2023-05-19",
        "end_date" => "2023-05-11",
        "budget" => "11111",
        "id" => "64569002562c3"
    ),
    "5" => array(
        "destination" => "luxor",
        "destination_photo" => "https://img.theculturetrip.com/wp-content/uploads/2021/07/c49y89-e1626878574776.jpg",
        "start_date" => "2023-05-18",
        "end_date" => "2023-05-19",
        "budget" => "1000",
        "id" => "64569002562c4"
    )
);

// Bubble sort the data array by budget
$count = count($data);
for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($data[$i]['budget'] > $data[$j]['budget']) {
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }
}

// Print the sorted data array
foreach ($data as $item) {
    echo "Destination: " . $item['destination'] . "\n";
    echo "Destination photo: " . $item['destination_photo'] . "\n";
    echo "Start date: " . $item['start_date'] . "\n";
    echo "End date: " . $item['end_date'] . "\n";
    echo "Budget: " . $item['budget'] . "\n";
    echo "ID: " . $item['id'] . "\n\n";
} 


----------------------------------------------------------------------------------------------------------
  
  
  
