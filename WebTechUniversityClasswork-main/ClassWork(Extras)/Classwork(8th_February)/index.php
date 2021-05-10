<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php 
        include 'MyCircle.php';
        $circle = new MyCircle();
        $circle->setRadius(5);
    ?>
    <h1>Area: <?php echo $circle->getArea(); ?></h1>
    <h2>Radius: <?php echo $circle->getRadius(); ?></h2>
    <p><?php echo $circle; ?></p>
</body>
</html>