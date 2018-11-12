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
}

//Display first and last name
$sql = "SELECT * FROM accounts";
$result = mysql_db_query($conn, $sql);
if(mysql_num_rows($result)>0{
	echo $row["fname"];
	echo $row["lname"];

//Display Questions
$sql = "SELECT * FROM questions";
$result = mysql_db_query($conn, $sql);
if(mysql_num_rows($result)>0{
	echo $row["qBody"];

?>
