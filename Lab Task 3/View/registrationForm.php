<?php
include('../control/validation.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body >
    <h1 align='center'>Registration</h1>
    <table>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <tr>
        <td><label for ="name">Name: </label></td>
        <td><input type="text"  id="n" name="name"></td>
        <?php echo $validateName ?><br>
    </tr>
    <tr>
        <td><label for="email">Email: </label></td>
        <td><input type="text"  id="e" name="email"></td>
        <?php echo $validateEmail ?><br>
    </tr>  
    <tr>  
        <td><label for="userName">Username: </label></td>
        <td><input type="text"  id="m" name="un"></td>
        <?php echo $validateUserName ?><br>
    </tr>
    <tr>   
        <td><label for="password">Password: </label></td>
        <td><input type="password"  id="p" name="password"></td>
        <?php echo $validatePassword ?><br>
    </tr>
    <tr>   
        <td><label for="Confirmpassword">Confirm Password: </label></td>
        <td><input type="password"  id="cp" name="confirmPassword"></td>
        <?php echo $validateConfirmPassword ?><br>
    </tr>
    <tr>
    <td>Gender: 
    <input type="radio" id="male" name="gender" value="male">
    Male
    <input type="radio" id="female" name="gender" value="female">
    Female
    <input type="radio" id="other" name="gender" value="other">
    Other</td>
    <?php echo $validateGender ?><br>
    </tr>      
    <tr>
    <td>Date of Birth:   
    <input type="date" id="birthday" name="birthday"></td>
    <?php echo $validateDateOfBirth ?><br>
    </tr> 
    <tr>
    <td><input type="submit" value="SUBMIT">
    <input type="reset" value="RESET"></td>
    
    </tr>
    </form>
    </table>
    
</body>
</html>
