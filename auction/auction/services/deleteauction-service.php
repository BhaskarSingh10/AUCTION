<?php
include('service-header.php');

$auctionId = $_GET['AuctionId'];

$std = "DELETE FROM Auctions WHERE AuctionID = '$auctionId'";

if (mysqli_query($conn, $std)) {
    header("Location: ../auctions.php");
} else {
    echo "Error: " . $std . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
