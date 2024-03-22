<?php
function validateName($name) {
    return preg_match('/^[A-Za-z]+$/', $name);
}

function validatePhoneNumber($number) {
    return preg_match('/^[0-9]{10}$/', $number);
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validatePassword($password) {
    // Password should contain at least 1 number, 1 lowercase and uppercase letter, 1 special character
    // Length should be between 8 to 12 characters
    return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-_=+{};:,<.>ยง~]).{8,12}$/', $password);
}
function birthdayCheck($birthdate){
    $today = new DateTime('today');
    $birthdate = new DateTime($birthdate);
    return $today->format('md') === $birthdate->format('md');
}
// Function to calculate months and days until the next birthday
function calculateDaysUntilBirthday($birthdate) {
    $today = new DateTime('today');
    $birthdate = new DateTime($birthdate);
    $nextBirthday = new DateTime($birthdate->format('Y-m-d'));
    if ($nextBirthday < $today) {
        $nextBirthday->modify('+1 year');
    }
    $interval = $today->diff($nextBirthday);
    return [$interval->m, $interval->d];
}


echo birthdayCheck("2024-03-22") . "hello<br>";

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
    // Print variables
    echo "First Name: " . $first_name . " - " . (validateName($first_name) ? "valid" : "invalid") . "<br>";
    echo "Last Name: " . $last_name . " - " . (validateName($last_name) ? "valid" : "invalid") . "<br>";
    echo "Country Code: " . $country_code . "<br>";
    echo "Contact Number: " . $contact_number . " - " . (validatePhoneNumber($contact_number) ? "valid" : "invalid") . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Email: " . $email . " - " . (validateEmail($email) ? "valid" : "invalid") . "<br>";
    // Validate Birthdate
    $today = new DateTime();
    $birthdateObj = DateTime::createFromFormat('Y-m-d', $birthdate);
    $isPastDate = $birthdateObj < $today;
    echo "Birthdate: " . $birthdate . " - " . ($isPastDate ? "valid" : "invalid") . "<br>";
    echo "Password: " . $password . " - " . (validatePassword($password) ? "valid" : "invalid") . "<br>";
    // Confirm Password validation
    $passwordsMatch = $password === $confirm_password;
    echo "Confirm Password: " . $confirm_password . " - " . ($passwordsMatch ? "valid" : "invalid") . "<br>";

    if (birthdayCheck($birthdate)) {
        echo "Hello $first_name!<br>";
        echo "Wish you a very happy birthday!";
    } else {
        // Calculate days until the next birthday
        [$months, $days] = calculateDaysUntilBirthday($birthdate);
        echo "Hello $first_name!<br>";
        echo "Your birthday is just $months months, $days days away.";
    }

} else {
    echo "No data submitted.";
}
?>
