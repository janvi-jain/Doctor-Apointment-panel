<?php

   session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'doctor_panel';

   $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Database not connected");

   define('ADMIN_URL',"http://localhost:3000/admin-panel/");

?>