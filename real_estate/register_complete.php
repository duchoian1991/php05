<?php
include 'connect.php';
	$target_dir = "uploads/";

	$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
	    //Check submit register
    if(isset($_POST["register"])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $birthday = strtotime($_POST['birthday']);
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        //

        $avatar = "";
		$check = getimagesize($_FILES["avatar"]["tmp_name"]);
	    if($check !== false)
	     {
	            move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
	        	$avatar = $_FILES["avatar"]["name"];
	       } else 
	        	{
	        		echo "file is not an image";
	        	}

        $sql = "INSERT INTO users (first_name, last_name, avatar, username, password, birthday, gender, email, phone)
                VALUES ('$first_name','$last_name','$avatar','$username','$password','$birthday','$gender','$email','$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "Register success";
        }
        
        
    }

?>