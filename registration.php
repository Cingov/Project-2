<?php 

require database.php

//PDO

try {
    $conn = $db = newPDO($dsn, $username, $password);
    echo "Connected";
}
catch(PDOException $e){
    $error = $e->getMessage();
	echo "Connection failed";
}
header("Location: .?action=user_Qlist.php");


if(isset($_POST['login'])){

$first = filter_input(INPUT_POST, "first");
$last = filter_input(INPUT_POST, "last");
$birth = filter_input(INPUT_POST, "birth");
$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");

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

//Execute

if ($fname != ""){
	if ($lname !=""){
		if ($birth != ""){
			if ($email != ""){
				if ($pass != ""){
					
					$query = "SElECT * FROM accounts WHERE fname = :first";
					$statement = $pdo->prepare($sql);
					$statement->bindValue(':first', $first);
					$statement->execute();
					
					$query = "SElECT * FROM accounts WHERE lname = :last";
					$statement = $pdo->prepare($sql);
					$statement->bindValue(':last', $last);
					$statement->execute();
					
					$query = "SElECT * FROM accounts WHERE birthday = :birthday";
					$statement = $pdo->prepare($sql);
					$statement->bindValue(':birth', $birth);
					$statement->execute();
				
					$query = "SElECT * FROM accounts WHERE email = :email";
					$statement = $pdo->prepare($sql);
					$statement->bindValue(':email', $email);
					$statement->execute();
					
					$query = "SElECT * FROM accounts WHERE password = :password";
					$statement = $pdo->prepare($sql);
					$statement->bindValue(':password', $pass);
					$statement->execute();
					
					$query = INSERT INTO 'accounts'(fname, lname, birthday, email, password)
					VALUES ($first, $last, $birth, $email, $pass);
					
				}else{
						echo"user already exists";
						
}

}
?>
