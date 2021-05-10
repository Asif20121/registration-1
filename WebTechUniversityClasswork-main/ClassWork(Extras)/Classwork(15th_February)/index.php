<?php 
    $validatename="";
    $validateemail="";
    $validatecheckbox="";
    $validateradio="";
    $validategender="";
    $v1=$v2=$v3="";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST["fname"];
        $email=$_REQUEST["email"];

        if(empty($name) || strlen($name) < 3) {
            $validatename="you must enter valid name";
        } else {
            $validatename="your name is ".$name;
        }

        if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email)) {
            $validateemail="your must enter valid email";
        } else {
            $validateemail="your email is ".$email;
        }

        if(!isset($_REQUEST["vehicle1"]) && !isset($_REQUEST["vehicle2"]) && !isset($_REQUEST["vehicle3"])) {
            $validatecheckbox = "please select at least one checkbox";
        } else {
            if(isset($_REQUEST["vehicle1"])) {
                $v1 = $_REQUEST["vehicle1"];
            }
            if(isset($_REQUEST["vehicle2"])) {
                $v2 = $_REQUEST["vehicle2"];
            }
            if(isset($_REQUEST["vehicle3"])) {
                $v3 = $_REQUEST["vehicle3"];
            }
        }

        if(!isset($_REQUEST["gender"])) {
            $validategender="Please select your gender";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        Enter your first name: <input type="text" name="fname"><?php echo $validatename; ?>
        <br><br>
        Enter your email: <input type="text" name="email"> <?php echo $validateemail; ?><br>

        your options are <br>

        <input type="checkbox" name="vehicle1" value="bike"> I have a bike <br>
        <input type="checkbox" name="vehicle2" value="car"> I have a Car <br>
        <input type="checkbox" name="vehicle3" value="boat"> I have a Boat <br>
        <?php echo $validatecheckbox; ?>
        <?php echo $v1; ?>
        <?php echo $v2 ?>
        <?php echo $v3; ?>
        <p>Please select your gender: </p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="male">Female</label><br>
        <input type="radio" id="other" name="gender" value="female">
        <label for="male">Other</label><br>
        <?php echo $validategender ?>
        <input type="submit" value="submit">
    </form>
</body>
</html>