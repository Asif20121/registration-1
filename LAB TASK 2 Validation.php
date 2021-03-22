<?php
$validatename ="";
$validateemail ="";
$validatepassword ="";
$validatecpassword ="";
$validatecheckbox = "";
$validateradio ="";
$validategender ="";
$v1=$v2=$v3 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_REQUEST ["fname"];
    $email = $_REQUEST ["email"];
    $password = $_REQUEST["password"];
    $cpassword = $_REQUEST["cpassword"];

   if (empty($name) || strlen($name) < 5)
  {
      $validatename ="you must enter your namne";
  } 
   else
   {
    $validatename ="your name is ".$name;
   }
   if (empty($email) || preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]*@[a-z0-9\-]+\.)+([a-z]{2,6}$/ix",$email)
   {
    $validateemail ="you must enter your email";
   } 
  else
  {
    $validatemail ="your name is ".$email;
  }
  if (empty($password) || strlen($password)<8 || preg_match("/(?=.*[@#$%^&+=]).*$/",$password)
   {
    $validatepassword ="you must enter valid password";
   } 
  else
  {
    $validatepassword = $password;
  }
  if (empty($cpassword) || $password != $cpassword)
   {
    $validatecpassword ="you must enter valid password";
   } 
  else
  {
    $validatecpassword = $cpassword;
  }


  if (!isset($_REQUEST["vehicle1"]) && !isset($_REQUEST["vehicle2"]) && !isset($_REQUEST["vehicle3"]))
  {
    $validatecheckbox = "please select at least one checkbox";
  }  
  else
  {
    if(isset($_REQUEST["vehicle1"]))
    {
        $v1 = $_REQUEST["vehicle1"];
    }
    if(isset($_REQUEST["vehicle2"]))
    {
        $v2 = $_REQUEST["vehicle2"];
    }
    if(isset($_REQUEST["vehicle3"]))
    {
        $v3 = $_REQUEST["vehicle3"];
    }
  }
  if (!isset($_REQUEST["gender"]))
  {
    &$validategender = "Please select your gender";
   }
 }
?>

<!DOCTYPE HTML>
<html>
<head>
</head>

<title> Lab Task </title>
<body>
<h1> REGISTRATION </h1>

<form action= "<?php echo $_SERVER["PHP_SELF"] ?>" method="post"  >
<table>
<tr>
<td> Name:</td>
<td><input type="text" id="n" name="name"> <?php echo $validatename; ?></td>
<tr>
<td>Email:</td>
<td><input type="text" id="e" name="email"><?php echo $validateemail; ?></td>
</tr>
<tr>
<td>User Name:</td>
<td><input type="text" id="un" name="uname"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="p" name="pass"></td>
</tr>
<tr>
<td> Confirm Password:</td>
<td><input type="password" id="cp" name="cpass"></td>
</tr>
<tr>
<td>Gender: </td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">
female
<input type="radio" id="other" name="gender" value="other">
other <?php echo $validategender;?></td> 
</tr>
<tr>
<td>Date of Birth:</td>
<td><input type="date" id="birthday" name="birthday"> <td>
</tr>
<tr>
<td><input type="submit" value="SUBMIT"></td>
<td><input type="reset" value="RESET"></td>
<tr>
</table>


<input type = "checkbox" id = "vehicle1" name = "vehicle1" value  = "Bike"> 
I have a bike <br>
<input type = "checkbox" id = "vehicle2" name = "vehicle2" value  = "Car">
I have a car <br>
<input type = "checkbox" id = "vehicle3" name = "vehicle3" value  = "Boat">
I have a boat <br>
<br>
<?php .echo.$validatecheckbox;?>
<?php .echo.$v1;?>
<?php .echo.$v2;?>
<?php .echo.$v3;?>
<br>

</form>
</body>
</html>
