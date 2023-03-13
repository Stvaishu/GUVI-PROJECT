<?php

// get form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_1 = $_POST['password_1'];

// validate form data
// if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
//   $response = array('success' => false, 'message' => 'Please fill in all fields.');
// } elseif ($password != $confirm_password) {
//   $response = array('success' => false, 'message' => 'Passwords do not match.');
// } else
//  {
  // connect to database
  $conn =  mysqli_connect('localhost', 'root', '', 'login');

  // prepare query
  $stmt = $conn->prepare("insert into user(username, email, password, password_1) values('$username', '$email', '$password', '$password_1')");
  

  // execute query
  if ($stmt->execute()) {
    $response = array('success' => true);
  } else {
    $response = array('success' => false, 'message' => 'Error inserting data into database.');
  }

  // close database connection
  $stmt->close();
  $conn->close();

?>
