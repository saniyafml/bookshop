<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookshop";
$db = new mysqli($servername, $username, $password, $dbname);
if($db->connect_error){
	die("Связь не установлена: " . $db->connect_error);
}
mysqli_set_charset($db, 'utf8mb4_general_ci');
echo "<p class='alert alert-success'> Связь установлена </p>";
?>