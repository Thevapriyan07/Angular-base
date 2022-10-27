<?php
session_start();
if(count($_POST)>0){
$fna=$_POST['fname'];
$lna=$_POST['lname'];

$link=new mysqli("localhost","root","","phpLearn");
$result=$link->query("insert into students(first_name,last_name)values('$fna','$lna')");
$link->close();

$_SESSION['msg']='<br><b style="color:green">Save Successfully!!!</b>';
header('location:connection.php');
}else{
    header('location:connection.php');
}

?>