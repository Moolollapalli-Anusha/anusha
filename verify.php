<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "registration"
$user = $_POST['user'];
$pass = $_POST['pass'];
$con = new mysqli($server,$user,$pass,$db);
//To connect to the database
if($con->connect_error)
{
die("Connection failed");
}
else
{
echo "connected successfully";
}
//To create a table
$sql = "create table user (username varchar(20),password varchar(20));"
if($con->query($sql) === TRUE)
{
echo "created successfully.";
}
else
{
echo "Creation failed.";
}
$sql = "Insert into user (username,password) values (sistk,123);"
if($con->query($sql) === TRUE)
{
echo "inserted successfully.";
}
else{
echo "Insertion failed.";
}
if($user == "sistk" && $pass == "123")
{ echo "Login successful.";}
else{
echo "invalid details";} 