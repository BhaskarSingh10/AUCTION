<?php
include('service-header.php');

$username = $_POST['username'];
$ppwd = $_POST['ppwd'];


$std = "SELECT * FROM Sellers WHERE SellerUsername = '$username' AND SellerPassword = '$ppwd'";
$row = mysqli_query($conn, $std);
if ($row) {
    if (mysqli_num_rows($row) == 1) {
        $row = $row->fetch_array(MYSQLI_ASSOC);
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $row['SellerUsername'];

        header("Location: ../userprofile.php");
    } else {
        echo "User not found";
    }
} else {
    echo "Error: " . $std . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
