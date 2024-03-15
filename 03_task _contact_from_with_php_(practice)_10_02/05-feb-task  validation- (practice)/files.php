<?php 
				print_r($_POST);
				// print_r($_FILES['photo']['name']); //exit;
				// $photoType = $_FILES['photo']['type'];
				// if($photoType == 'image/png' || $photoType == 'image/jpeg')
				// {
				// 	print_r("Pass"); //exit;
				// }
				// else{
				// 	print_r("Invalid file format, please upload only png or jpg file format"); exit;
				// }
				// print_r($photoType); exit;

			?>
			

			<p>Name = <?php echo (empty($_POST['name'])) ? "Name Required" : (preg_match ('/^[a-zA-Z\s]+$/', $_POST['name']) ? $_POST['name']:'Enter the vaild Name' ) ; ?></p>

			<p>Email = <?php echo (empty($_POST['email'])) ? "email Required" : (preg_match ('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email']) ? (strtolower($_POST['email'])):'Enter the vaild email' ) ; ?></p>

			<p>Password = <?php echo (empty($_POST['password'])) ? "Password Required" : md5($_POST["password"]); ?></p>
			<p>Address = <?php echo $_POST['address']; ?></p>

			<p>Mobile = <?php echo (empty($_POST['mobile'])) ? "No Required" : (preg_match ('/^[6-9]\d{9}$/', $_POST['mobile']) ? $_POST['mobile']:'Enter the vaild No' ) ; ?></p>

			<p>Pan = <?php echo (empty($_POST['pan'])) ? "Pan no Required" : (preg_match ('/^[A-Za-z]{5}[0-9]{4}[A-Za-z]{1}$/', $_POST['pan']) ? (strtoupper($_POST['pan'])):'Enter the vaild Pan no' ); ?></p>

			<p>Aadhar card no = <?php echo (empty($_POST["Aadhar_card_no"])) ? "Aadhar card no Required" : (preg_match('/^\d{12}$/', $_POST["Aadhar_card_no"]) ? $_POST["Aadhar_card_no"]:'Enter the vaild  Aadhar card no' ); ?></p>

			<p>pincode no = <?php echo (empty($_POST["pincode"])) ? "pincode no Required" : (preg_match('/^\d{6}$/', $_POST["pincode"]) ? $_POST["pincode"]:'Enter the vaild  pincode no' ); ?></p>

			<p>Gender = <?php echo (empty($_POST['gender'])) ? "Gender Required" : ucfirst($_POST['gender']); ?></p>
			<p>Hobbies = <?php echo (empty($_POST['hobbies'])) ? "Atleast 1 hobbies Required" : ucwords(implode(" | ", $_POST['hobbies'])); ?></p>
			<p>City = <?php echo (empty($_POST['city'])) ? "City Required" : ($_POST['city']); ?></p>


            <?php
	if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    	switch ($_FILES['photo']['error']) {
        	case UPLOAD_ERR_INI_SIZE:
        	case UPLOAD_ERR_FORM_SIZE:
           	 	echo "File size exceeds limit.";
            	break;
        	case UPLOAD_ERR_PARTIAL:
            	echo "The uploaded file was only partially uploaded.";
            	break;
        	case UPLOAD_ERR_NO_FILE:
				echo "No file was uploaded.<br>";
				break;
        	case UPLOAD_ERR_NO_TMP_DIR:
				echo "Missing temporary folder.";
				break;
			case UPLOAD_ERR_CANT_WRITE:
				echo "Failed to write file to disk.";
				break;
			case UPLOAD_ERR_EXTENSION:
				echo "A PHP extension stopped the file upload.";
				break;
			default:
				echo "Unknown upload error.";
				break;
		}
} 
else {
	?>
    File upload is successful.<br>
    <p>Photo_name = <?php echo $_FILES['photo']['name']; ?></p>
    <p>Photo_type = <?php echo $_FILES['photo']['type']; ?></p>
    <p>Photo_tmp_name = <?php echo $_FILES['photo']['tmp_name']; ?></p>
    <p>Photo_size = <?php echo $_FILES['photo']['size']; ?></p>
    <?php
}
?>


<!-- ----------------------------OR------------------------------ -->
			
