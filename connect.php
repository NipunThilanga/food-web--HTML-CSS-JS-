<?php

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['person']) && isset($_POST['reservetion-date']) && isset($_POST['message'])) {
 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $person = $_POST['person'];
    $reservationDate = $_POST['date'];
    $message = $_POST['message'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "onlinedb";

  
    $conn = new mysqli($servername, $username, $password, $database);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  
    $sql = "INSERT INTO your_table (name, phone, person, reservation_date, message) VALUES ('$name', '$phone', '$person', '$reservationDate', '$message')";


    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    $conn->close();
}
?>
