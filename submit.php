<?php
// 1. Connect to the database
$conn = new mysqli("localhost", "root", "", "signup_form");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 2. Get POST data safely
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// 3. Validate input
if ($name === '' || $email === '' || $password === '') {
  header("Location: index.php?error=All fields are required");
  exit();
}

// 4. Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// 5. Insert into DB
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
  echo "<h2 style='text-align:center; color:green;'>Signup Successful!</h2>";
  echo "<p style='text-align:center;'><a href='index.php'>Go back</a></p>";
} else {
  header("Location: index.php?error=Email already exists");
}

$stmt->close();
$conn->close();
?>
