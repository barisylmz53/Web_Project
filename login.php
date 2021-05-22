<?php
error_reporting(0);
session_start();

$host = "localhost";
$username = "id16869924_baris123";
$password = "H?kLZ7xrdsa3{gP!";
$dbname = "id16869924_123baris";

$conn = new mysqli($host,$username,$password,$dbname);
$new = mysqli_set_charset($conn,"utf8");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

    if($_POST){
        $name = $_POST["name"];
        $password = $_POST["password"];

            $giris = "SELECT * FROM users WHERE name='$name' AND password='$password'";
            $getir = $conn->query($giris);
                if ($getir->num_rows>0){
                    while ($row = $getir->fetch_assoc()){
                        $_SESSION["ID"] = $row["id"];
                        header("location:index.html");
                    }
            }
}
?>