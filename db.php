<?php
$server="localhost";
$username="root";
$password=" ";
$dbname="my_api";
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_errno)
{
    die("connection failed".$conn->connect_errno);
}
echo "connection successfully done";