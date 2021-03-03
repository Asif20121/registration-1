<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function RegUser($conn,$table,$userName,$email,$username,$password,$gender,$dob){
    $sql="INSERT INTO registration (fullname, email, username, pass, gender, dob)
    VALUES ('$username','$email','$userName','$password','$gender','$dob')";    
    $res = $conn->query($sql);
    if($res){
        echo "new record inserted";
    }
    else{
        echo "error occurred".$conn->connect_error;
    }
}



function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
