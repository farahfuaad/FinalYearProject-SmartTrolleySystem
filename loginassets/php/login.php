<?php 

include 'loginassets/php/sqltest.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: login.html");
}

if (isset($_POST['submit'])) {
    $email = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM dbo.admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: login.html");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>