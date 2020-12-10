<?php
session_start();
$host = "localhost"; /* Host name */
$user = "markaklq"; /* User */
$password = "HyQsoft!@34"; /* Password */
$dbname = "markaklq_rmt_v3"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
