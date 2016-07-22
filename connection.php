


<?php


define('DB_NAME', 'massagephp');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
	die('Could not connect:  ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}


$value = $_POST['first_name'];
$value2 = $_POST['last_name'];
$value3 = $_POST['your_email'];
$value4 = $_POST['gender'];
$value5 = $_POST['massagetype'];




$sql = "INSERT INTO massage (first_name, last_name, your_email, gender, massagetype) VALUES ('$value','$value2', '$value3', '$value4', '$value5')";


if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}




mysql_close();
 


echo "<script>
             alert('Your email has been sent, thank you for your time'); 
             window.history.go(-1);
     </script>";




