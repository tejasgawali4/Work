<?php
 //define('HOST','mysql.hostinger.in');
 //define('USER','u502452270_andro');
 //define('PASS','belal_123');
 //define('DB','u502452270_andro');

$HOST="localhost";
$USER="root";
$PASS="";
$DB="leaveregister";
 
 //Connecting to database
 $con = mysqli_connect($HOST,$USER,$PASS,$DB) or die('Unable to Connect');

 echo "connected";
