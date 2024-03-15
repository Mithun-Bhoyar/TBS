<!DOCTYPE html>
<html>
	<head>
		<title>Form With PHP</title>
		<meta name="charset" content="utf-8"/>
		<meta name="viewport" content="width = device-width , initial-scale= 1.0"/>
		<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
		<link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal" role="form" method="post" action="files.php" enctype="multipart/form-data">
				<h1 class="text-center text-danger" style="color:#A59FCD"><b>Application Form</b></h1>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Name</label><span class="text text-danger">* </span>
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="text" class="form-control" name="name" placeholder="Enter Your Name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Password</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="password" class="form-control" name="password" placeholder="Enter Your Passwords" maxlength="10"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Email</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="email" class="form-control" name="email" placeholder="Enter Your Email"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Mobile no</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="text" class="form-control" name="mobile" placeholder="Enter Your no" maxlength="10"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Pin Code</label>
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="text" class="form-control" name="pincode" placeholder="Enter Your pin no" maxlength="6"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">PAN Card</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="text" class="form-control" name="pan" placeholder="Enter Your Pan no"maxlength="10"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Aadhar card no</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<input type="text" class="form-control" name="Aadhar_card_no" placeholder="Enter Your Aadhar card no"maxlength="12"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 col-md-2 col-xs-12 control-label">Address</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 col-md-10 col-xs-12">
						<textarea class="form-control" name="address" placeholder="Enter Your Address"></textarea>
					</div>
				</div>
				<div class="form-group"><span class="text text-danger"> *</span> 
					<label class="col-sm-2 control-label">Gender</label>
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" name="gender" value="male"/>Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="female" />Female
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Hobbies</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="reading" />Reading
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="singing" />Singing
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="dancing" />Dancing
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" name="hobbies[]" value="playing" />Playing
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Select</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10 ">
						<select class="form-control" name="city">
							<option value="">-- Select City --</option>
							<option value="Nagpur">Nagpur</option>
							<option value="Pune">Pune</option>
							<option value="Mumbai">Mumbai</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Photo</label><span class="text text-danger"> *</span> 
					<div class="col-sm-10">
						<input type="file" class="form-control" name="photo" />
					</div>
				</div>
				<div class="form-group text-center">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success btn-lg" name="save">Save</button>
					</div>
				</div>
			</form>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>