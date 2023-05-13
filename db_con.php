<?php
$con = mysqli_connect("localhost", "root", "", "res") or die("Error Connect");
if ($con) {
$con->set_charset("utf8");
// echo "connection succeed";
}
?>