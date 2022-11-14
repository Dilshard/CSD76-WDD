<?php

include 'con.php';

$id = $_GET['abcd'];

$sql = "DELETE FROM personal WHERE id=$id";

$status = mysqli_query($con,$sql);

if($status){
    header("Location: view.php");
}else{
    echo "Error - Delete!";
}

?>