<?php
$sname="localhost";
$uname="root";
$pssword="";

$db_name="test_db";

$conn= mysqli_connect($sname,$uname,$pssword,$db_name);
if (!$conn){
    echo "fail";
}

?>