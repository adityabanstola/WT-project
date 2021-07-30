<?php 
$con = mysqli_connect("localhost", 'root', '', 'first_year') ;

$sql = "delete from students where roll = 20" ;

mysqli_query($con, $sql) ;

var_dump(mysqli_error_list($con)) ;

echo mysqli_affected_rows($con) ;

?>