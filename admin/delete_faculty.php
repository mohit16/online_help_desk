<?php
session_start();
include_once('../db_conn/db_conn.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
$id=$_GET[faculty_id];
$sql="delete from faculties where faculty_id='$id'";

mysql_query($sql);
//$rows=mysql_fetch_assoc($result);
header("location:admin_faculty.php");
?>


