<?php

$con = mysqli_connect("localhost", "root", "", "first_year") ;

$sql = "Insert into students values(null, 'Aditya', 'Pokhara', '9817144456', 75)" ;

$result = mysqli_query($con, $sql ) ;

echo "<pre>" ;

// print_r(mysqli_fetch_all($result)) ;
echo mysqli_affected_rows($con) ;
