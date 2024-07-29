<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location:login.php');
        exit();
    }
?>

<?php
$host = 'localhost';
$db = 'aiphp-proj';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
 

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $email=$_SESSION['userloggedin'];
         
    // Handle file upload
    if (isset($_FILES['cover']) && $_FILES['cover']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['cover']['tmp_name'];
        $fileName = $_FILES['cover']['name'];
        $fileSize = $_FILES['cover']['size'];
        $fileType = $_FILES['cover']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Specify directory for uploaded files
        $uploadFileDir = './uploaded_files/';
        if (!is_dir($uploadFileDir)) {
            mkdir($uploadFileDir, 0755, true); // Create the directory if it doesn't exist
        }
        $dest_path = $uploadFileDir . $fileName;

        // Move the file to the directory
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $message = 'File is successfully uploaded.';

            // Save the book details to the database
            $stmt = $pdo->prepare('INSERT INTO bookcreated (title, author, genre, description, cover,email) VALUES (?, ?, ?, ?, ?,?)');
            $stmt->execute([$title, $author, $genre, $description, $dest_path, $email]);
            $bookId = $pdo->lastInsertId();

            // Redirect to bookpub.php with the book details in the URL
            header("Location: bookpub.php?title=" . urlencode($title) . "&author=" . urlencode($author) . "&genre=" . urlencode($genre) . "&description=" . urlencode($description) . "&cover=" . urlencode($dest_path));
            
            exit();
        } else {
            $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by the web server.';
        }
    } else {
        $message = 'There is some error in the file upload. Please check the following error.<br>';
        $message .= 'Error:' . $_FILES['cover']['error'];
    }
    echo $message;
} else {
    echo "Invalid request.";
}
?>
