<?php
	function validate_form()
	{
		$error=array();


		(empty(trim($_POST['fname']))?$error['fname'] = "Please Enter Your First Name":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['fname']))?$error['fname'] = "Please Enter Valid fname": $_POST['fname']));
	
		(empty(trim($_POST['mname']))?$error['mname'] = "Please Enter Your Middle Name":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['mname']))?$error['mname'] = "Please Enter Valid mname": $_POST['mname']));

		(empty(trim($_POST['lname']))?$error['lname'] = "Please Enter Your Lastlname":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['lname']))?$error['lname'] = "Please Enter Valid lname": $_POST['lname']));
		
		(empty(trim($_POST['email']))?$error['email'] = "Please Enter Your Email":((!preg_match( "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_POST['email']))?$error['email'] = "Please Enter Valid Email": $_POST['email']));

	    (empty($_POST['city'])?$error['city'] ="Please Select City": $_POST['city']);
		
		(empty($_POST['stateorprovince'])?$error['stateorprovince'] ="Please Select State or Province": $_POST['stateorprovince']);

		(empty($_POST['country'])?$error['country'] ="Please Select Country": $_POST['country']);

		(empty(trim($_POST['fieldlabel']))?$error['fieldlabel'] = "Please Enter Your fieldlabel":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['fieldlabel']))?$error['fieldlabel'] = "Please Enter Valid Field Label": $_POST['fieldlabel']));

		(empty(trim($_POST['fieldtype']))?$error['fieldtype'] = "Please Enter Your fieldtype":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['fieldtype']))?$error['fieldtype'] = "Please Enter Valid Field type": $_POST['fieldtype']));

		(empty(trim($_POST['dateformat']))?$error['dateformat'] = "Please Enter Your dateformat":((!preg_match ('/^[a-zA-Z\s]+$/', $_POST['dateformat']))?$error['dateformat'] = "Please Enter Valid Field Label": $_POST['dateformat']));


		// (empty(trim($_POST['password'])))?$error['password'] = "Please Enter your password":(($MINLENGTH)?$error['password'] = "Please Enter password length must be atleast 8 charecter ":(($MAXLENGTH)?$error['password'] = "Please Enter password length must not exceed 15 charecter":md5($_POST['password'])));


		// (empty(trim($_POST['mobile_no']))?$error['mobile_no'] = "Please Enter Mobile No":((!preg_match('/^[6-9]\d{9}$/',$_POST['mobile_no']))?$error['mobile_no'] = "Please Enter Valid Mobile no": $_POST['mobile_no']));

		// (empty(trim($_POST['pincode']))?$error['pincode'] ="Please Enter pincode":((!preg_match("/^\d{6}$/", $_POST['pincode']))?$error['pincode'] ="Please Enter Valid pincode": $_POST['pincode']));


		// (empty(trim($_POST['pan']))?$error['pan'] ="Please Enter Pancard No":((!preg_match("/^[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}$/", $_POST['pan']))?$error['pan'] ="Please Enter Valid Pan Number": strtoupper($_POST['pan'])));

		// (empty(trim($_POST['Aadhar_card_no']))?$error['Aadhar_card_no'] ="Please Enter Aadhar No":((!preg_match("/^\d{12}$/", $_POST['Aadhar_card_no']))?$error['Aadhar_card_no'] ="Please Enter Valid Aadhar Number": $_POST['Aadhar_card_no']));
		
		
		// (empty(trim($_POST['address']))?$error['address'] = "Please Enter Address": $_POST['address']);

		// (empty($_POST['gender']) ? $error['gender'] ="Please Select Gender":ucfirst($_POST['gender']));
        
        

	

		// ($_FILES['photo']['error']==4)?$error['photo']="Please Select your photo":(!in_array($_FILES['photo']['type'],$allowtypes)?$error['photo']="Please Select jpg, jpeg and png type of file":"");

		return $error;
	}
?>