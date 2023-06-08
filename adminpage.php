<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #89AEB0;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #b7b7b7;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>


<ul>
  <li><a class="active" href="#admin">Admin</a></li>
  <li><a href="view-kapal.php">Data kapal</a></li>
  <li><a href="view-tiket.php">Data tiket</a></li>
  <li><a href="view-customer.php">Data customer</a></li>
  <li><a href="view-pembayaran.php">metode pembayaran</a></li>
  <li><a href="view-voucher.php">voucher</a></li>
  <li><a href="logout.php">Log out</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Selamat Datang Admin</h2>
  <p>lihat data </p>
</div>

</body>
</html>
