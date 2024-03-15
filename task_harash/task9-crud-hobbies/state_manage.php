<?php 
	require_once("includes/config.php");
	if(isset($_POST['deleteall']))
	{
		$tokenids = $_POST['selector'];  
		if(empty($tokenids))
		{
			header("location:state_manage.php");
		}
		else
		{
			$del=0;
			$nondel=0;
			for($i=0;$i<count($tokenids);$i++)
			{
				// print_r($tokenids[$i]); exit;
				// To fetch id of table hobbies against against tokenid 
				$getstatesdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT *
                FROM states WHERE tokenid ='".base64_decode($tokenids[$i])."'"));
				
				//To check whether hobby id is associated with users or not
				// $gethobbymapdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT id, hobby_id FROM users where hobby_id LIKE ('%".$gethobbydata['id']."%')"));
				/* print_r($gethobbydata);
				print_r($gethobbymapdata);
				exit(); */
				if(!isset($getstatesdata['id']) || empty($getstatesdata['id']))
				{
					header("location:state_manage.php");
				}
				// elseif(!empty($gethobbymapdata))
				// {
				// 	//Display massage if data of hobbies master table mapped with users or transaction table.
				// 	//echo "Hobby is already mapped";
				// 	 $nondel++;
				// } 
				else
				{
					//remove data from master table if master table hobbies not mapped with transaction table or users table.
					mysqli_query($conn,"DELETE FROM states WHERE id='".$getstatesdata['id']."'");
					$del++;
					//header("location:hobby_manage.php");
				}
			}
			$massage = $del." state has been deleted <br/>";
			//$massage= $nondel." Hobby Unable to delete<br/>";
		}
	}
	
	// To fetch all record from users table
	$getallstates = mysqli_query($conn,"SELECT id, tokenid, statename,status FROM states  order by statename desc");
	// print_r($getallhobbies);exit(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Manage state</title>
		<?php require_once("includes/head.php"); ?>
	</head>
	<body>
		<div class="container">
			<br/>
			<div class="panel panel-primary">
				<div>
					<?php require_once("includes/navigation.php"); ?>
					<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
				</div>
				<div class="panel-body">
					<form method="post">	
						<?php if(isset($massage) && !empty($massage)){?>
							<div class="alert alert-danger"><?= $massage ?></div>
						<?php } ?>
						<div class="panel-heading  panel-primary">
							<h4 class="panel-title">state List</h4>
							<div style=" margin: 0px -14px 30px 0;">
								<!-- <button type="button" class="btn btn-danger btn-sm" name="back" onclick="window.location='index.php'"></button> -->
								<button type="button" class=" btn btn-danger btn-sm col-md-1 col-md-push-11" name="back" onclick="window.location='index.php'">logout</button>
							</div>

						</div  style="  margin-top: -10px;">
						<br/>
						<button type="button" class="glyphicon glyphicon-plus btn btn-primary btn-sm col-md-1 col-md-push-11" name="create" onclick="window.location='state_create.php'">Create</button>
						<br/>
						<br/>
						<br/>
						<div class="table-responsive">
							<table id="statesdatalist" class="table table-bordered table-striped">
								<thead>
									<tr>
										<td><input type="checkbox" name="checkall" onclick="check();"/></td>
										<td>state</td>
										<td>Status</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
								<?php while($statesrow = mysqli_fetch_array($getallstates)) { ?>
									<tr>
										<td><input type="checkbox" name="selector[]" value="<?= base64_encode($statesrow['tokenid']) ;?>"/></td>

										<td><?php if(empty($statesrow['statename']))
											{
												echo "--NA--";
											}
											else{
												echo $statesrow['statename'];
											}
										
										?></td>
										


										<td>
											<?php if($statesrow['status']=='Active'){ ?>
												<span class="label label-success"><?php echo $statesrow['status']; ?></span>
										<?php } else {?>
											<span class="label label-danger"><?php echo $staterow['status']; ?></span>
										<?php } ?>
										</td>
										<td>
										<a href="state_view.php?tokenid=<?= base64_encode($staterow['tokenid']) ;?>" >View</a>
											
										<a href="state_update.php?tokenid=<?= base64_encode($staterow['tokenid']) ;?>" class="glyphicon glyphicon-pencil btn"></a>

										<a href="state_delete.php?tokenid=<?= base64_encode($staterow['tokenid']) ;?>" class="glyphicon glyphicon-trash btn" onclick="return confirm('Do you really want to remove this record?')"></a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
								<tr>
									<td colspan="4"><button type="submit" name="deleteall" class="btn btn-danger btn-xs">Delete</button></td>
								</tr>
							</table>
						</div>
					</form>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
		<?php require_once("includes/scripts.php"); ?>
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap.min.js"></script>
		<script>
			$("document").ready(function(){
				 $('#statesdatalist').DataTable();
			});
		</script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
