<?php

session_start();

unset($_SESSION['id_customer']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['status_admin']);

session_destroy();

echo "<script>
alert('Logout successfully');
document.location = 'login.php';
</script>";

?>