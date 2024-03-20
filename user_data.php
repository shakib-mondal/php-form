<?php
// // Connect to the database
// $conn = new mysqli("localhost", "username", "password", "your_database");

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Sanitize form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$countryCode = $_POST['countryCode'];
$contactNumber = $_POST['contactNumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];



// Print form data
echo "First Name: $firstName <br>";
echo "Last Name: $lastName <br>";
echo "Country Code: $countryCode <br>";
echo "Contact Number: $contactNumber <br>";
echo "Address: $address <br>";
echo "Gender: $gender <br>";
echo "Email: $email <br>";
echo "Birthdate: $birthdate <br>";



// // Insert data into the database
// $sql = "INSERT INTO users (first_name, last_name, country_code, contact_number, address, gender, email, birthdate) VALUES ('$firstName', '$lastName', '$countryCode', '$contactNumber', '$address', '$gender', '$email', '$birthdate')";

// if ($conn->query($sql) === TRUE) {
//     echo "Welcome $firstName!";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close connection
// $conn->close();
?>
