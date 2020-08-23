<?php



$username = "tooba@tantschool-mysqldbserver";

$server="tantschool-mysqldbserver.mysql.database.azure.com";

$password="Admin123";

$dbname="quiz";

	$conn = new mysqli($server, $username, $password, $dbname);



 

function python($name, $no)

{

	

	$quizname = 'Python';

	$totalmarks = 25;

	global $conn;

	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)

VALUES ('$name', '$quizname', '$totalmarks', '$no')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

}



function php($name, $no)

{

	global $conn;

	$quizname = 'PHP';

	$totalmarks = 25;

	

	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)

VALUES ('$name', '$quizname', '$totalmarks', '$no')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();

}



function html($name, $no)

{

	global $conn;

	$quizname = 'HTML';

	$totalmarks = 25;

	

	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)

VALUES ('$name', '$quizname', '$totalmarks', '$no')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();

}



function css($name, $no)

{

	global $conn;

	$quizname = 'CSS';

	$totalmarks = 25;

	

	$sql = "INSERT INTO userprofile (username, subjects, totalmarks, score)

VALUES ('$name', '$quizname', '$totalmarks', '$no')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();

}



?>