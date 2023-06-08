<?php

session_start();

include "koneksi.php";

@$username = $_POST['username'];
@$password = $_POST['password'];

$sql_login = "SELECT * FROM customer where username = '$username' and password = '$password'";
$login = mysqli_query($koneksi, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    $_SESSION['id_customer'] = $data['id_customer']; 
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['status_admin'] = $data['status_admin'];

    header('location:view-tiket.php');
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login.php';
        </script>";

}

?>