<?php

// // DEV BY DUDI 20210218
$server= "localhost";
$username ="root";
$password="";
$dbname ="penjualan";

// LIVE
// $server= "sql103.epizy.com";
// $username ="epiz_27806660";
// $password="";
// $dbname ="epiz_27806660_penjualan";

$conn = new mysqli($server, $username, $password, $dbname);


// if ($conn->connect_error) {
// 	die("connection failed" . $conn->connect_error );
// }
//  echo "Connect successfully done";
