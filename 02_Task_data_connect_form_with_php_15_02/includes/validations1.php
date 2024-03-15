<?php
	function validate_form()
	{
		$error=array();
		$MINLENGTH = strlen($_POST['password'])<8;
		$MAXLENGTH = strlen($_POST['password'])>=16;
		$allowtypes=array('image/jpg','image/jpeg','image/png');

		(empty(trim($_POST['name']))?$error['name'] = "Please Enter Your Name":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['name']))?$error['name'] = "Please Enter Valid Name": $_POST['name']));
		
		
		(empty(trim($_POST['email']))?$error['email'] = "Please Enter Your Email":((!preg_match( "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_POST['email']))?$error['email'] = "Please Enter Valid Email": $_POST['email']));
		
		(empty(trim($_POST['password'])))?$error['password'] = "Please Enter your password":(($MINLENGTH)?$error['password'] = "Please Enter password length must be atleast 8 charecter ":(($MAXLENGTH)?$error['password'] = "Please Enter password length must not exceed 15 charecter":md5($_POST['password'])));


		(empty(trim($_POST['mobile_no']))?$error['mobile_no'] = "Please Enter Mobile No":((!preg_match('/^[6-9]\d{9}$/',$_POST['mobile_no']))?$error['mobile_no'] = "Please Enter Valid Mobile no": $_POST['mobile_no']));

		(empty(trim($_POST['pincode']))?$error['pincode'] ="Please Enter pincode":((!preg_match("/^\d{6}$/", $_POST['pincode']))?$error['pincode'] ="Please Enter Valid pincode": $_POST['pincode']));


		(empty(trim($_POST['pan']))?$error['pan'] ="Please Enter Pancard No":((!preg_match("/^[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}$/", $_POST['pan']))?$error['pan'] ="Please Enter Valid Pan Number": strtoupper($_POST['pan'])));

		(empty(trim($_POST['Aadhar_card_no']))?$error['Aadhar_card_no'] ="Please Enter Aadhar No":((!preg_match("/^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/", $_POST['Aadhar_card_no']))?$error['Aadhar_card_no'] ="Please Enter Valid Aadhar Number": $_POST['Aadhar_card_no']));
		
		(empty($_POST['address']) ? $error['address'] = "Please Enter Address": $_POST['address']);

		(empty($_POST['gender']) ? $error['gender'] ="Please Select Gender":ucfirst($_POST['gender']));
        
        (empty($_POST['hobbies']) ? $error['hobbies'] ="Please Select  Hobbies ":ucwords(implode(" | ", $_POST['hobbies'])));

		(empty($_POST['city_id'])?$error['city_id'] ="Please Select City": $_POST['city_id']);

		(empty($_POST['photo'] = ($_FILES['photo']['error'] == 4)) ? "Please Select your photo" : (!preg_match('/\.(jpg|jpeg|png)$/i', $_FILES['photo']['name']) ? "Please Select jpg, jpeg, or png type of file" : ""));

		//($_FILES['photo']['error']==4) ? $error['photo']="Please Select your photo":(!in_array($_FILES['photo']['type'],$allowtypes)?$error['photo']="Please Select jpg, jpeg and png type of file":"");

		return $error;
	}
?>