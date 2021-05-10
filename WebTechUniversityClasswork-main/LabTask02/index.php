<?php include "includes/myform.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change Password</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="username">Username: </label></td>
            <td><input type="text" name="username"></td>
            <td><?php echo $usernameV ?></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="text" name="email"></td>
            <td><?php echo $emailV ?></td>
        </tr>
        <tr>
            <td><label for="password">Password: </label></td>
            <td><input type="password" name="password"></td>
            <td><?php echo $passV ?></td>
        </tr>
        <tr>
            <td><label for="cpassword">Confirm Password</label></td>
            <td><input type="password" name="cpassword"></td>
            <td><?php echo $cpassV ?></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td><input type="radio" name="gender" value="male">Male</td>
            <td><input type="radio" name="gender" value="female">Female</td>
            <td><input type="radio" name="gender" value="other">Other</td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birthd</label></td>
            <td><input type="date" name="dob"></td>
        </tr>
        <tr>
            <td><label for="fileUpload">Upload File</label></td>
            <td><input type="file" name="fileUpload"><?php echo $file_status; ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    <h3><?php echo $generalError ?></h3>
    </form>

    <img src="<?php echo $target_file ?>" alt="">
</body>
</html>