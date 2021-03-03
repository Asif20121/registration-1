<?php
    include('../control/db.php');

    $validateName="";
    $validateEmail="";
    $validateUserName="";
    $validatePassword="";
    $validateConfirmPassword="";
    $validateGender="";
    $validateDateOfBirth="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $userName = $_REQUEST['un'];
            $password = $_REQUEST['password'];
            $confirmPassword = $_REQUEST['confirmPassword'];
            $gender = $_REQUEST['gender'];
            $dob = $_REQUEST['birthday'];

            if(empty($name) || strlen($name)<5){
                $validateName="Please Enter a Valid Name";
            }
            else{
                $validateName=$name;
            }
            if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
                $validateEmail="Email Does NOT exist! Enter a Valid Email";
            }
            else{
                $validateEmail=$email;
            }
            if(empty($userName) || !preg_match('/[a-zA-Z0-9._]{5,}$/', $userName)){
                $validateUserName="Please enter a valid username";
            }
            else{
                $validateUserName=$userName;
            }
            if((empty($password) || strlen($password)<5) || (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))){
                $validatePassword = "Password set your password more than 6 characters";
            }
            else{
                $validatePassword = "Password set successfull";
            }
            if(!empty($confirmPassword) || $password == $confirmPassword){
                $validateConfirmPassword = "Password Matched";
            }
            else{
                $validateConfirmPassword = "Please Check Your Password Again!";
            }
            if(!isset($_POST['gender'])){
                $validateGender = "Please select one";
            }
            else{
                $gender = null;
            }
            
            if(!isset($_POST['birthday'])){
                $validateDateOfBirth = "Please select birth-date";
            }
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->RegUser($conobj,"registration",$name,$email,$userName,$password,$gender,$dob);
            
            $connection->CloseCon($conobj);
            
    }

?>
