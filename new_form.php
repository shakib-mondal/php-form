<?php
// Initialize variables to store form data
$first_name = "";
$last_name = "";
$country_code = "";
$contact_number = "";
$address = "";
$gender = "";
$email = "";
$birthdate = "";
$password = "";
$confirm_password = "";

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in variables
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country_code = $_POST['country_code'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Print the stored form data
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "Country Code: " . $country_code . "<br>";
    echo "Contact Number: " . $contact_number . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Email ID: " . $email . "<br>";
    echo "Date of Birth: " . $birthdate . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Confirm Password: " . $confirm_password . "<br>";
} else {
    echo "No data submitted.";
}
?>
