<?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Message: ".$message."
";
mail ( "fstatcal@gmail.com", "New FST inquiry", $email_message);
header("Location: officers.html");
?>