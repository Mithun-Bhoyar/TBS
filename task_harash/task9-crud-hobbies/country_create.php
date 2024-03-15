<?php
require_once("includes/config.php");

if(isset($_POST['save']))
{
	// To call external php file for validation
	require_once("includes/validations.php");

	// call function for validations which is created into validations.php file
	$errors = validate_create_country();
		
	if(empty($errors))
	{
		$checkhobbyname=mysqli_fetch_assoc(mysqli_query($conn,"SELECT countryname FROM countries WHERE countryname='".$_POST['countryname']."'"));

		
		
		if(!empty($checkcountryname))
		{
			$errors['countryname']= "country already exist ";
		}
		else
		{
			$insertcountry = "INSERT INTO countries set 
			tokenid='".md5("countries_".date('y-m-d-h-i-s').rand(100000,999999))."', 
			countryname='".ucwords($_POST['countryname'])."', 
			status='".ucfirst($_POST['status'])."',
			created='".date("Y-m-d h:i:s")."'";
			if(mysqli_query($conn,$insertcountry))
			{
				unset($_POST);

				$success ='true';
			} 
			else 
			{
				$success ='false'; 
			}	
		}	
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create - Manage countries</title>
		<?php require_once("includes/head.php"); ?>
	</head>
	<body>
		<div class="container">
			<br/>
			<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
				<div class="panel panel-primary">
					<div>
						<?php require_once("includes/navigation.php"); ?>
					</div>
					<div class="panel-body">
						<?php 
							if(isset($success) && $success=="true")
							{ ?>
								<div class="alert alert-success"><?php echo "country has been created successfully";
								echo "<script>setTimeout(\"location.href = 'http://localhost/TBSphpmysql/task_harash/task9-crud-hobbies/country_manage.php';\",1500);</script>";
								?></div>
							<?php } ?>
							<?php 
							if(isset($success) && $success=="false")
							{ ?>
								<div class="alert alert-danger"><?php echo "Unable to create country please try again"; ?></div>
							<?php } ?>
							
						<div class="panel-heading  panel-primary">
							<h4 class="panel-title">Create country</h4>
						</div>
						<br/>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">country</label><span class="text text-danger"> *
									 <?php echo(isset($errors['countryname']))?$errors['countryname']:'';?>
							
							</span>
								<input type="text" class="form-control" name="countryname" placeholder="Enter country" value="<?php echo(isset($_POST['countryname']))?$_POST['countryname']:'';?>" autocomplete="off"/>
							</div>
							<div class="form-group">
								<label class=" control-label">Status</label><span class="text text-danger"> * <?php echo(isset($errors['status']))?$errors['status']:'';?></span>
								<br/>
								<label class="radio-inline">
									<input type="radio" name="status" value="Active" <?php echo(isset($_POST['status'])) && $_POST['status']=="Active"?'checked':' ';?> />Active
								</label>
								<label class="radio-inline">
									<input type="radio" name="status" value="Block" <?php echo(isset($_POST['status'])) && $_POST['status']=="Block"?'checked':' ';?>/>Block
								</label>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<div class="form-group">
							&emsp; &nbsp;<button type="submit" class="btn btn-success btn-sm" name="save">Create</button>
							<button type="button" class="btn btn-danger btn-sm" name="back" onclick="window.location='country_manage.php'">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	<?php require_once("includes/scripts.php"); ?>
	</body>
</html>