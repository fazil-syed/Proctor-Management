<?php
$con= new mysqli('localhost','fazil','dscecse2023','dsce_cse');
if(mysqli_connect_error())
	{
		die("server not connected");
	}

$sid=$_REQUEST['sid'];

$del="delete from student where sid=$sid";

if(mysqli_query($con,$del))
{

	header("location:teacherdashboard.php");

}
else
{
echo mysqli_error($con);
}

?>