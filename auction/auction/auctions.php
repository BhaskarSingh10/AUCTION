<?php
include('global-header.php');
?>
<section class="section novi-bd novi-bg-img section-md">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="text-center text-sm-start">Auctions </h2>
            <a class="button button-sm button-primary-2 mt-0" href="addauction.php">Add Aunction</a>
        </div>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-secondary">
                <thead>
                    <tr>
                        <th>Auction Id</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Item Image</th>
                        <th>Starting Price</th>
                        <th>Current Price</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $std = "SELECT * FROM Auctions";
                    $result = mysqli_query($conn, $std);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['AuctionID'] . '</td>';
                            echo '<td>' . $row['ItemName'] . '</td>';
                            if (mb_strlen($row['ItemDescription']) > 40) {
                                echo '<td title="' . $row['ItemDescription'] . '">' . mb_substr($row['ItemDescription'], 0, 40) . '...</td>';
                            } else {
                                echo '<td>' . $row['ItemDescription']  . '</td>';
                            }

                            echo '<td><img src="./' . $row['ItemImageURL'] . '" alt="' .  $row['ItemName'] . '" />' . '</td>';
                            echo '<td>$' . $row['StartingPrice'] . '</td>';
                            echo '<td>$' . $row['CurrentPrice'] . '</td>';
                            echo '<td>' . $row['StartTime'] . '</td>';
                            echo '<td>' . $row['EndTime'] . '</td>';
                            echo '<td>' . $row['Status'] . '</td>';
                            if (isset($_SESSION['loggedIn'])) {
                                echo '<td>
                            <div class="d-flex">
                            <a href="editauction.php?AuctionId=' . $row['AuctionID'] . '" class="me-4">
                            <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="?delAuctionId=' . $row['AuctionID'] . '">
                            <i class="fa-solid fa-trash"></i>
                            </a>
                            </div>
                            </td>';
                            }
                            echo '</tr>';
                        }
                    } else {
                        echo "<tr><td>No results found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php
if (isset($_GET['delAuctionId'])) {
    $auctionId = $_GET['delAuctionId'];
?>
    <div class="modal-backdrop fade show"></div>
    <div class="modal fade show" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Auction</h5>
                    <a href="auctions.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
                </div>
                <div class="modal-body">
                    <p>Do you want to delete this auction?</p>
                </div>
                <div class="modal-footer">
                    <a href="auctions.php"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                    <a href="services/deleteauction-service.php?AuctionId=<?= $auctionId ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                </div>
            </div>
        </div>
    </div>
<?php
}
include('global-footer.php');
?>