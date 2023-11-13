<?php
// Connect to the database
$db_host = "mysql-container";
$db_user = "root";
$db_password = "pass";
$db_name = "user_db";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the data from the form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Insert the data into the database
$sql = "INSERT INTO user_table (id, name, email_id, phone_no, address)
VALUES ('$id', '$name', '$email', '$phone', '$address');";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
