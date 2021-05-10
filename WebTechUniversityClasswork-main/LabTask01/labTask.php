<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task</title>
</head>
<body>
    <form action="/">
        <table>
            <tr>
                <td><label for="fname">Name: </label></td>
                <td><input name="fname" id="fname" type="text" /><br /></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input name="text" id="email" type="email" /><br /></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input name="password" id="password" type="password" /><br /></td>
            </tr>
            <tr>
                <td><label for="confirm_password">Confirm Password: </label></td>
                <td><input name="confirm_password" id="confirm_password" type="password" /><br /></td>
            </tr>
            <tr>
                <td><label for="dob">Birth Date: </label></td>
                <td><input name="dob" id="dob" type="date" /><br /></td>
            </tr>
            <tr>
                <td><input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label></td>
                <td><input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label></td>
                <td><input type="radio" id="other_gender" name="gender" value="other_gender">
                <label for="other_gender">Other</label></td>
            </tr>
            <tr>
            <td><input type="submit" value="submit">
            <input type="button" value="reset" /></td>
            </tr>
        </table>
    </form>
</body>
</html>