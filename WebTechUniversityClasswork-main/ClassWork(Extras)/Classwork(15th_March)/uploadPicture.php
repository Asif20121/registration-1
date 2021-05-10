<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <input type="file" name="image">
        <input type="submit" value="upload">
    </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])) {
    $servername = 'localhost';
    $serverusername = 'root';
    $serverpassword = '';
    $serverdbname = 'webtech';

    $conn = new mysqli($servername, $serverusername, $serverpassword, $serverdbname);
    if(is_uploaded_file($_FILES['image']['temp_name'])) {
        echo "uploading";
        $img_data = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imgProperties = getimageSize($_FILES['image']['tmp_name']);
        $sql = "INSERT INTO gallery (image, imageType) VALUES ('{$imgProperties['mime']}', '{$img_data}')";
    }
    if($conn->query($sql) === TRUE) {
        echo "image inserted";
    } else {
        echo "Error";
    }
    $conn->close();
}
    


?>