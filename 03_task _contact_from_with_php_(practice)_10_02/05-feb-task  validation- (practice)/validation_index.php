<?php
if(isset($_POST['save']))
{
	// To call external php file for validation
	require_once("includes1/validations1.php");



	// call function for validations which is created into validations.php file
	$errors = validate_form();

	// print_r($errors);exit;
	
}
?>
<?php include_once("includes1/header1.php"); ?>
		<div class="container">
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
				<!-- <?php if(isset($errors) && !empty($errors)){?>
				<div class="alert alert-danger">
				<?php echo implode("<br/>",$errors);?>
				</div>	
				<?php } ?> -->
			<!-- <form class="form-horizontal" role="form" method="post" action="files.php" enctype="multipart/form-data"> -->
				<h1 class="text-center text-danger" style="color:#A59FCD"><b>Application Form</b></h1>
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Name</label><span class="text text-danger"> * <?php echo(isset($errors['name']))?$errors['name']:'';?></span>
						<input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php echo(isset($_POST['name']))?$_POST['name']:'';?>"/>
					</div>
				</div>
                <div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Email</label><span class="text text-danger"> * <?php echo(isset($errors['email']))?$errors['email']:'';?></span>
						<input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo(isset($_POST['email']))?$_POST['email']:'';?>"/>
						<span class="text text-danger"> * Note = It uses more than 10 characters with letters (both uppercase and lowercase), numbers, and symbols.For example:sagar123@gmail.com"</span>
					</div>
				</div>
				<div class="col-md-12">
				  <div class="form-group">
					 <label class="control-label">Password</label><span class="text text-danger"> * <?php echo(isset($errors['password']))?$errors['password']:'';?></span>
					 <input type="password" class="form-control" name="password" placeholder="Enter Your Passwords"maxlength="15" value="<?php echo(isset($_POST['password']))?$_POST['password']:'';?>"/>
					 <span class="text text-danger"> * Note =  Examples of strong passwords can include a combination of uppercase letters, lowercase letters, numbers, and symbols. For example: p@55w0rd! Or m0n3yTr3e$.</span>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Mobile no</label><span class="text text-danger"> * <?php echo(isset($errors['mobile_no']))?$errors['mobile_no']:'';?></span>
						<input type="text" class="form-control" name="mobile_no" placeholder="Enter Your Mobile no "maxlength="10" value="<?php echo(isset($_POST['mobile_no']))?$_POST['mobile_no']:'';?>"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Pin Code</label><span class="text text-danger"> * <?php echo(isset($errors['pincode']))?$errors['pincode']:'';?></span>
						<input type="text" class="form-control" name="pincode" placeholder="Enter Your Pin Code"maxlength="6" value="<?php echo(isset($_POST['pincode']))?$_POST['pincode']:'';?>"/>
					</div>
				</div>				
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">PAN Card</label><span class="text text-danger"> * <?php echo(isset($errors['pan']))?$errors['pan']:'';?></span>
						<input type="text" class="form-control" name="pan" placeholder="Enter Your pan no"maxlength="10" value="<?php echo(isset($_POST['pan']))?$_POST['pan']:'';?>"/>
						<span class="text text-danger"> * Note = The PAN must start with five uppercase letters, followed by four digits, and ending with one uppercase letter. </span>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Aadhar card no</label><span class="text text-danger"> * <?php echo(isset($errors['Aadhar_card_no']))?$errors['Aadhar_card_no']:'';?></span>
						<input type="text" class="form-control" name="Aadhar_card_no" placeholder="Enter Your Aadhar card no"maxlength="12" value="<?php echo(isset($_POST['Aadhar_card_no']))?$_POST['Aadhar_card_no']:'';?>"/>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					    <label class="control-label">Address</label><span class="text text-danger"> * <?php echo(isset($errors['address']))?$errors['address']:'';?></span>
					    <textarea class="form-control" name="address" placeholder="Enter Your Address"><?php echo(isset($_POST['address']))?$_POST['address']:'';?></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class=" control-label">Gender</label><span class="text text-danger"> * <?php echo(isset($errors['gender']))?$errors['gender']:'';?></span>
						<br/>
						<label class="radio-inline">
							<input type="radio" name="gender" value="male" <?php echo(isset($_POST['gender'])) && $_POST['gender']=="male"?'checked':' ';?> />Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="female" <?php echo(isset($_POST['gender'])) && $_POST['gender']=="female"?'checked':' ';?>/>Female
						</label>
					</div>
					<div class="form-group">
						<label class="control-label">Hobbies</label><span class="text text-danger"> * <?php echo(isset($errors['hobbies']))?$errors['hobbies']:'';?></span>
						<br/>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="reading" <?php echo(isset($_POST['hobbies'])) && in_array("reading",$_POST['hobbies'])?'checked':' ';?>/>Reading
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="singing" <?php echo(isset($_POST['hobbies'])) && in_array("singing",$_POST['hobbies'])?'checked':' ';?>/>Singing
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="dancing" <?php echo(isset($_POST['hobbies'])) && in_array("dancing",$_POST['hobbies'])?'checked':' ';?>/>Dancings
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="playing" <?php echo(isset($_POST['hobbies'])) && in_array("playing",$_POST['hobbies'])?'checked':' ';?>/>Playing
						</label>
					</div>
					<div class="form-group">
						<label class="control-label">City</label><span class="text text-danger"> * <?php echo(isset($errors['city']))?$errors['city']:'';?></span>
							<select class="form-control" name="city" value="<?php echo(isset($_POST['city']))?$_POST['city']:'';?>">
								<option value="0" <?php echo(isset($_POST['city']) && $_POST['city']==0)?'selected':' ';?>>-- Select City --</option>
								<option value="1" <?php echo(isset($_POST['city']) && $_POST['city']==1)?'selected':' ';?>>Nagpur</option>
								<option value="2" <?php echo(isset($_POST['city']) && $_POST['city']==2)?'selected':' ';?>>Pune</option>
								<option value="3" <?php echo(isset($_POST['city']) && $_POST['city']==3)?'selected':' ';?>>Mumbai</option>
							</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="control-label">Photo</label><span class="text text-danger"> * <?php echo(isset($errors['photo']))?$errors['photo']:'';?></span>
						<input type="file" class="form-control" name="photo" value="<?php echo(isset($errors['city']))?$errors['city']:'';?>"/>
						<span class="text text-danger"> * Note = Select jpg, jpeg and png type of file </span>
					</div>
				</div>
				<div class="form-group text-center">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success btn-lg" name="save">Save</button>
					</div>
				</div>
			</form>
		</div>
		