<?php

    $ID= rand(00000, 99999);
    $n_people = filter_input(INPUT_GET,"numberPeople");
    $n_room = filter_input(INPUT_GET,"numberRoom");
    $in_date = filter_input(INPUT_GET,"in_date");
    $out_date = filter_input(INPUT_GET,"out_date");
    
    echo "Number of people : ",$n_people,"\n";
    echo "<br>";
    echo "Number of room : ",$n_room,"\n";
    echo "<br>";
    echo "for 2 days";//edit 
    echo "<br>";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
   
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO reserve (`ID`, `n_people`, `n_room`, `in_date`, `out_date`)VALUES (".$ID.",".$n_people."," .$n_room.",'". $in_date."','".$out_date."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
        
    
?>
