<?php
class db
{
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "webtech";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

        return $conn;
    }
    function CheckUser($conn, $table, $username, $password)
    {
        $result = $conn->query("SELECT * FROM " . $table . " WHERE username='" . $username . "' AND password='" . $password . "'");
        return $result;
    }

    function ShowAll($conn, $table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }

    function UpdateUser($conn, $table, $username, $firstname, $email, $dob, $profession, $interests)
    {
        $sql = "UPDATE $table SET firstname='$firstname', email='$email', dob='$dob', profession='$profession', interests='$interests' WHERE username='$username'";

        if ($conn->query($sql) === TRUE) {
            $result = TRUE;
        } else {
            $result = FALSE;
        }
        return  $result;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
}
