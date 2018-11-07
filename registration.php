<?php 

$first = filter_input(INPUT_POST, "first");
$last = filter_input(INPUT_POST, "last");
$birth = filter_input(INPUT_POST, "birth");
$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");

//if ($_SERVER["REQUEST_METHOD"] == "POST")

//Check for empty fields
	if (empty($first)) {
		$error="field is empty";
		echo($error); 
}	
	else if (empty($last)) {
		echo($error); 
}	
	else if (empty($birth)) {
		echo($error); 
}	
	else if (empty($email)) {
		echo($error); 
}
	else if (empty($pass)){ 
		echo($error); 
}
//check for @ in email
	else if (strpos($email, '@') < 0) {
	$error = "Email needs @";
	echo($error);
}  
//check if password less than 8 char
	else if (strlen($pass) < 8) {
		$error = "Password must exceed 8 characters";
		echo($error);
}	
	else {
		echo "valid";
}

?>
