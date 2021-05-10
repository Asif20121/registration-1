<?php
session_start();

include('../control/updatecheck.php');


if (empty($_SESSION["username"])) // Destroying All Sessions
{
  header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>

<body>
  <h2>Profile Page</h2>

  Hii, <h3><?php echo $_SESSION["username"]; ?></h3>
  <br>Your Profile Page.
  <br><br>
  <?php
  $radio1 = $radio2 = $radio3 = "";
  $firstname = $email = "";
  $connection = new db();
  $conobj = $connection->OpenCon();

  $userQuery = $connection->CheckUser($conobj, "student", $_SESSION["username"], $_SESSION["password"]);

  if ($userQuery->num_rows > 0) {

    // output data of each row
    while ($row = $userQuery->fetch_assoc()) {
      $firstname = $row["firstname"];
      $email = $row["email"];
      $date = $row["dob"];
      $interests = preg_split('/,\s/', $row["interests"]);
      $profession = $row['profession'];

      if ($row["gender"] == "female") {
        $radio1 = "checked";
      } else if ($row["gender"] == "male") {
        $radio2 = "checked";
      } else {
        $radio3 = "checked";
      }
      $professions = array(
        'professor' => '',
        'academician' => '',
        'student' => '',
        'developer' => ''
      );
      $professions[$profession] = 'selected';
      $interestsChecked = array(
        'music' => '',
        'gaming' => '',
        'travelling' => '',
        'collecting' => ''
      );
      foreach($interests as $interest) {
        $interestsChecked[$interest] = 'checked';
      }
    }
  } else {
    echo "0 results";
  }
  ?>
  <form action='' method='post'>
  <?php echo $profession; ?>
    firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>"><br>

    email : <input type='text' name='email' value="<?php echo $email; ?>"><br>
    Gender:
    <input type='radio' name='gender' value='female' <?php echo $radio1; ?>>Female
    <input type='radio' name='gender' value='male' <?php echo $radio2; ?>>Male
    <input type='radio' name='gender' value='other' <?php $radio3; ?>> Other <br>

    Date Of Birth
    <input type="date" name="date" value="<?php echo $date ?>">
    

    Profession:
    <select name="profession" id="">
      <option value="professor" <?php echo $professions['professor'] ?>>Professor</option>
      <option value="academician" <?php echo $professions['academician'] ?>>Academician</option>
      <option value="student" <?php echo $professions['student'] ?>>Student</option>
      <option value="developer" <?php echo $professions['developer'] ?>>Developer</option>
    </select> <br>

    Interests:
    <input type="checkbox" name="interest[]" value="music" <?php echo $interestsChecked['music'] ?>>Music
    <input type="checkbox" name="interest[]" value="gaming" <?php echo $interestsChecked['gaming'] ?>>Gaming
    <input type="checkbox" name="interest[]" value="travelling" <?php echo $interestsChecked['travelling'] ?>>Travelling
    <input type="checkbox" name="interest[]" value="collecting" <?php echo $interestsChecked['collecting'] ?>>Collecting <br>

    <input name='update' type='submit' value='Update'>

    <?php echo $error; ?>
    <br>
    <br>
    <a href="../view/pageone.php">Back </a>

    <a href="../control/logout.php"> logout</a>

</body>

</html>