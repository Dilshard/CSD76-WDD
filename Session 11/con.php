<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "csd76";

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    // echo "Successfully Connected!";
}else{
    echo "Error!";
}
