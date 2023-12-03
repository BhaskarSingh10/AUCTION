<?php
include('global-header.php');

if (isset($_GET['AuctionId'])) {
    $auctionId = $_GET['AuctionId'];

    $std = "SELECT * FROM Auctions WHERE AuctionID = '$auctionId'";
    $result = mysqli_query($conn, $std);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Auction not found";
        $conn->close();
        include('global-footer.php');
        exit;
    }
} else {
    echo "Auction Id not provided";
    $conn->close();
    include('global-footer.php');
    exit;
}
?>
<section class="section novi-bg novi-bg-img section-md bg-default text-center section-top-shadow">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <h3>Edit Auction form</h3>
                <form action="services/editauction-service.php" method="POST" class="rd-form rd-mailform rd-form-centered" enctype="multipart/form-data">
                    <input type="hidden" name="auctionId" value="<?= $auctionId ?>">
                    <div class="form-wrap">
                        <label for="itemImage">Item Image</label>
                        <input class="form-input form-control-has-validation" id="itemImage" type="file" name="itemImage">
                    </div>
                    <div class="form-wrap">
                        <label for="itemName">Item Name</label>
                        <input placeholder="Enter item name" class="form-input form-control-has-validation" id="itemName" type="text" name="itemName" value="<?php echo $row['ItemName']; ?>" required>
                    </div>
                    <div class="form-wrap">
                        <label for="itemDescription">Item Description</label>
                        <textarea placeholder="Enter item description" class="form-input form-control-has-validation" id="itemDescription" name="itemDescription" required><?php echo $row['ItemDescription']; ?></textarea>
                    </div>
                    <div class="form-wrap">
                        <label for="itemPrice">Item Price</label>
                        <input placeholder="Enter item price" class="form-input form-control-has-validation" id="itemPrice" type="number" name="itemPrice" value="<?php echo $row['CurrentPrice']; ?>" required>
                    </div>
                    <div class="form-wrap">
                        <label for="itemPrice">Auction Status</label>
                        <select name="status" class="form-input form-control-has-validation" required>
                            <option value="Open" <?php echo ($row['Status'] == 'Open') ? 'selected' : ''; ?>>Open</option>
                            <option value="Closed" <?php echo ($row['Status'] == 'Closed') ? 'selected' : ''; ?>>Closed</option>
                        </select>
                    </div>
                    <div class="form-wrap">
                        <label for="startTime">Auction Start Time</label>
                        <input class="form-input form-control-has-validation" id="startTime" type="datetime-local" name="startTime" value="<?php echo date('Y-m-d\TH:i', strtotime($row['StartTime'])); ?>" required>
                    </div>
                    <div class="form-wrap">
                        <label for="endTime">Auction End Time</label>
                        <input class="form-input form-control-has-validation" id="endTime" type="datetime-local" name="endTime" value="<?php echo date('Y-m-d\TH:i', strtotime($row['EndTime'])); ?>" required>
                    </div>
                    <button class="button button-block button-primary" type="submit">Submit </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include('global-footer.php');
?>