<?php 
require "conn.php";
$email = $_POST["email"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from user where email like '$email' and password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
//if(mysqli_num_rows($result) > 0) {
//echo "login success !!!!! Welcome user";
//}
//else {
//echo "login not success";
//}

?>