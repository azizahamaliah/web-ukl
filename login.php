<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIX.boat - login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <h1 align="center"> Selamat Datang Di TIX.boat </h1>
  
    <form action="login_action.php" method="post">
    <table class="box" align="center"  width=328px height=200px bgcolor="#008B8B">
    <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="login" name="proses"><a href="tambah-customer.php">register</a></td>
    </tr>
</table>
</form>
</body>
</html>