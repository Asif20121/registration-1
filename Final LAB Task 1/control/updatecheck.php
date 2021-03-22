<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['firstname']) || empty($_POST['email']) ) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$value1=$value2=$value3=$value4=$value5="";
if(!empty($_POST['interest1'])){
    $value1=$_POST['interest1'];
}
if(!empty($_POST['interest2'])){
    $value2=$_POST['interest2'];
}
if(!empty($_POST['interest3'])){
    $value3=$_POST['interest3'];
}
if(!empty($_POST['interest4'])){
    $value4=$_POST['interest4'];
}
if(!empty($_POST['interest5'])){
    $value5=$_POST['interest5'];
}

$interests = $value1."+".$value2."+".$value3."+".$value4."+".$value5;

$userQuery=$connection->UpdateUser($conobj,"student",$_SESSION["username"],$_POST['firstname'],$_POST['email'],$_POST['password'], $_POST['address'], $_POST['dob'], $_POST['gender'],  $_POST['profession'], $interests);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}

?>
