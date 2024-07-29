<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp-proj";


// Generate a random password
function generatePassword($length = 4) {
    $characters = '01234569abcdefghirstuABCDEWXYZ';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return $password;
}

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " );
}

// Retrieve data submitted by the form
$email = $_POST['email'];
$username = $_POST[' username'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$password = generatePassword();

// Prepare and execute the SQL query to insert the data into the Employee table
$sql = "INSERT INTO user (email, username,  gender,  dateOfBirth, password) VALUES ('$email', '$username',  '$gender', '$dateOfBirth', '$password')";

try {
    if ($conn->query($sql) === TRUE) {
        header('Location:login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        header('Location:register.php?error');
        exit();

    } else {
        echo "Error: " . $e->getMessage();
    }
}


// Close the database connection
$conn->close();

?>