<?php 
    $usernameV = $emailV = $passV = $cpassV = "";
    $generalError = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_REQUEST["username"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $cpassword = $_REQUEST["cpassword"];
        if(isset($_REQUEST["gender"])) {
            $gender = $_REQUEST["gender"];
        }
        
        $dob = $_REQUEST["dob"];

        if(empty($username) || empty($email) || empty($password) || empty($cpassword) || empty($_REQUEST["gender"]) || empty($dob)) {
            $generalError = "Please fill up all the fields";
        } else {
            if(!preg_match("/[a-zA-Z0-9._]+/", $username)) {
                $usernameV = "<li>Username can only have alphanumeric characters/period/underscore</li>";
            }
            if(strlen($username) < 5) {
                $usernameV .= "<li>Username must contain atleast 5 characters</li>";
            }

            if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email)) {
                $emailV = "<li>Please enter a valid email</li>";
            }

            if(!preg_match("/(?=.*[@#$%]).*$/", $password)) {
                $passV = "<li>Password atleast contain 1 special character</li>";
            } 
            if(strlen($password) < 6) {
                $passV .= "<li>Password must contain atleast 6 characters</li>";
            }
            if($password != $cpassword) {
                $cpassV = "<li>Both password have to match</li>";
            }
        }

        $target_file = '';

        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES['fileUpload']['name']);

        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file)) {
            $file_status = 'Upload Successful';
        } else  {
            $file_status = "Something went wrong";
        }       
    }
?>