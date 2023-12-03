<?php
include('service-header.php');

$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$startingPrice = $_POST['itemPrice'];
$currentPrice = $_POST['itemPrice'];
$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];
$status = 'Open';
$itemImageURL = '';



$targetDir = "../auctionItemImages/";
$file = $targetDir . basename($_FILES["itemImage"]["name"]);
$upload_status = 1;
$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));


if (!is_dir($targetDir)) {
    mkdir($targetDir);
}

if (move_uploaded_file($_FILES["itemImage"]["tmp_name"], $file)) {
    $itemImageURL = 'auctionItemImages/' . basename($_FILES["itemImage"]["name"]);
}


$std = "INSERT INTO Auctions (ItemName, ItemDescription, ItemImageURL, StartingPrice, CurrentPrice, StartTime, EndTime, Status)
        VALUES ('$itemName', '$itemDescription', '$itemImageURL', '$startingPrice', '$currentPrice', '$startTime', '$endTime', '$status')";

if (mysqli_query($conn, $std)) {
    header("Location: ../auctions.php");
} else {
    echo "Error: " . $std . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
