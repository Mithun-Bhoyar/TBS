<?php 
require_once("includes/config.php");
if(!isset($_GET['tokenid']) || empty($_GET['tokenid']))
{
	// check if "id" not available
	header("location:state_manage.php");
}
else
{
	// To fetch id of table hobbies against against tokenid 
	$getstatesdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT id FROM states WHERE tokenid ='".base64_decode($_GET['tokenid'])."'"));
	
	//To check whether hobby id is associated with users or not
	//$gethobbymapdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT id, hobby_id FROM users where hobby_id LIKE ('%".$gethobbydata['id']."%')"));
	 //print_r($gethobbymapdata);
	/*print_r($gethobbymapdata);
	exit(); */
	if(!empty($getstatesdata))
	{
		mysqli_query($conn,"DELETE FROM states WHERE tokenid ='".base64_decode($_GET['tokenid'])."' ");
		header("location:state_manage.php");
		//Display massage if data of hobbies master table mapped with users or transaction table.
		//echo "Hobby is already mapped";
	}
	else
	{
		//remove data from master table if master table hobbies not mapped with transaction table or users table.
		mysqli_query($conn,"DELETE FROM states WHERE id='".$getstatesdata['id']."'");
		header("location:state_manage.php");
	}
}	
?>