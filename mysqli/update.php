<?php 

$con = mysqli_connect("localhost", 'root', '', 'first_year') ;

$sql = "update students set name = 'Gabbar', address = 'sworga' where name = 'Rocky'" ;

$res = mysqli_query($con, $sql) ;

print_r(mysqli_error_list($con)) ;

echo "Rows changed: " . mysqli_affected_rows($con) ;

?>