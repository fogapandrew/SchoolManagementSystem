<?php
require_once('./others/Data.php');

// Load database credentials from the config file
$config = require './others/config.php';

// Create an instance of the Data class with database credentials from the config file
$data = new Data($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $country = $_POST['country'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    // Prepare SQL statement to insert data into "students" table
    $sql = "INSERT INTO students (first_name, last_name, phone_number, email_address, country, date_of_birth, gender, address)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    //preparing the SQL statement for execution. If the preparation is successful, it returns a statement object which is stored in the $stmt variable.
    if ($stmt = $db->conn->prepare($sql)) {
        // Bind parameters to the statement
        /* This line binds the parameters to the prepared statement. 
        The "ssssssss" argument specifies the data types of the parameters. 
        In this case, each parameter is a string ("s"), and there are 8 parameters in total. 
        The subsequent arguments are the variables containing the actual values that will be
        inserted into the database.*/
        $stmt->bind_param("ssssssss", $first_name, $last_name, $phone_number, $email_address, $country, $date_of_birth, $gender, $address);
        
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo "Records inserted successfully.";
        } else {
            echo "Error: " . $db->conn->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }

}

    $data->closeConnection();
?>
