<?php
include('service-header.php');

$auctionId = $_POST['auctionId'];
$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$startingPrice = $_POST['itemPrice'];
$currentPrice = $_POST['itemPrice'];
$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];
$status = $_POST['status'];

$itemImageURL = '';


if (isset($_FILES["itemImage"])) {
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
}

$std = "UPDATE Auctions 
        SET 
            ItemName = '$itemName', 
            ItemDescription = '$itemDescription',";

if (!empty($itemImageURL)) {
    $std .= " ItemImageURL = '$itemImageURL',";
}

$std .= " StartingPrice = '$startingPrice', 
            CurrentPrice = '$currentPrice', 
            StartTime = '$startTime', 
            EndTime = '$endTime', 
            Status = '$status'
        WHERE 
            AuctionID = $auctionId";


if (mysqli_query($conn, $std)) {
    header("Location: ../auctions.php");
} else {
    echo "Error: " . $std . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
