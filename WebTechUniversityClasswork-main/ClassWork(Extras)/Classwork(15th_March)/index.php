<?php 
    $servername = 'localhost';
    $serverusername = 'root';
    $serverpassword = '';
    $serverdbname = 'webtech';

    $conn = new mysqli($servername, $serverusername, $serverpassword, $serverdbname);

    $username="Jack";
    $password="MustyCar123";
    $gender="male";
    $dob="12/11/1990";
    $image="musty.png";
    $email="mustycar@gmail.com";

    $stmt = $conn->prepare("INSERT INTO users (username, password, gender, dob, image, email) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss',$username, $password, $gender, $dob, $image, $email);

    $stmt->execute();
    print_r($stmt);

    $stmt->close();
    $conn->close();
?>