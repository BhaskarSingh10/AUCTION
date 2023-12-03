<?php
include('global-header.php');
?>
<section class="section novi-bg novi-bg-img section-md bg-default text-center section-top-shadow">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <h3>Add Auction form</h3>
                <form action="services/auction-service.php" method="POST" class="rd-form rd-mailform rd-form-centered" enctype="multipart/form-data">
                    <div class="form-wrap">
                        <label for="itemImage">Item Image</label>
                        <input class="form-input form-control-has-validation" id="itemImage" type="file" name="itemImage" required>
                    </div>
                    <div class="form-wrap">
                        <label for="itemName">Item Name</label>
                        <input placeholder="Enter item name" class="form-input form-control-has-validation" id="itemName" type="text" name="itemName" required>
                    </div>
                    <div class="form-wrap">
                        <label for="itemDescription">Item Description</label>
                        <textarea placeholder="Enter item description" class="form-input form-control-has-validation" id="itemDescription" name="itemDescription" required></textarea>
                    </div>
                    <div class="form-wrap">
                        <label for="itemPrice">Item Price</label>
                        <input placeholder="Enter item price" class="form-input form-control-has-validation" id="itemPrice" type="number" name="itemPrice" required>
                    </div>
                    <div class="form-wrap">
                        <label for="startTime">Auction Start Time</label>
                        <input class="form-input form-control-has-validation" id="startTime" type="datetime-local" name="startTime" required>
                    </div>
                    <div class="form-wrap">
                        <label for="endTime">Auction End Time</label>
                        <input class="form-input form-control-has-validation" id="endTime" type="datetime-local" name="endTime" required>
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