<?php
	define("LOGIN_ID", "hr@auphansoftware.com");
	define("LOGIN_PW", "hello");

	//Username request handler
	if (isset($_POST["uname"])) {
		if($_POST["uname"] === LOGIN_ID) {
			$username = $_POST["uname"];
			echo json_encode(array("status"=> "name_success", "message"=> "Username found. ".$username, "username"=>$username));
		}
		
		else if ($_POST["uname"] !== LOGIN_ID) {
			echo json_encode(array("status"=> "name_notfound", "message"=>"Username not found. Please register."));
		}
	}

	//Password request handler
	else if (isset($_POST["upass"])) {
		if($_POST["upass"] === LOGIN_PW) {
			$username = $_POST["upass"];
			echo json_encode(array("status"=> "pw_success", "message"=> "Login successful."));
		}
		
		else if ($_POST["upass"] !== LOGIN_PW) {
			echo json_encode(array("status"=> "pw_unmatch", "message"=>"Password does not match."));
		}
	}

?>

