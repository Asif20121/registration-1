<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'webtech';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die('Something went wrong: ' . $conn->connect_error);
    }
    
    function createTable($conn) {
        $query = "CREATE TABLE classwork3rdMarch (
                Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(100) NOT NULL,
                lname VARCHAR(100) NOT NULL,
                email VARCHAR(255) NOT NULL,
                age INT(3)
            )";
        $res = $conn->query($query);
        
        if($res) {
            return 'Table Successfully created';
        } else {
            return 'Something went wrong while creating table';
        }

    }

    function insertData($conn, $fname, $lname, $email, $age) {
        $query = "INSERT INTO classwork3rdMarch (fname, lname, email, age) VALUES ('$fname', '$lname', '$email', $age)";
        echo $query;
        if($conn->query($query) === TRUE) {
            return 'Value inserted';
        }
        return 'Failed to insert values';
    }

    //echo createTable($conn);
    echo insertData($conn, 'abtahi', 'tajwar', 'abtahitajwar@gmail.com', 21);
    
    $conn->close();
?>