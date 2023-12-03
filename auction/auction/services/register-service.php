<?php
include('service-header.php');

$sellerUsername = $_POST['username'];
$sellerPassword = $_POST['ppwd'];
$sellerName = $_POST['name'];
$sellerEmail = $_POST['email'];
$sellerGender = $_POST['gender'];
$sellerAddress = $_POST['address'];


$std = "INSERT INTO Sellers (SellerUsername, SellerName, SellerEmail, SellerPassword, SellerGender, SellerAddress)
        VALUES ('$sellerUsername', '$sellerName', '$sellerEmail', '$sellerPassword', '$sellerGender', '$sellerAddress')";

if (mysqli_query($conn, $std)) {
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $sellerUsername;

    header("Location: ../userprofile.php");
} else {
    echo "Error: " . $std . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
