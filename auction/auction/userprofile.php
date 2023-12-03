<?php
include('global-header.php');
if (!isset($_SESSION['loggedIn'])) {
?>
    <section class="section novi-bd section-lg text-center bg-primary">
        <div class="container">
            <div class="row row-50 row-fix justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <h1>404</h1>
                    <h2>Sorry, page not found!</h2>
                    <p class="text-black">The page you are looking for might have been removed, <br> had its name changed, or is temporarily unavailable.</p>
                </div>

            </div>
        </div>
    </section>
<?php
} else {
?>
    <section class="section novi-bd novi-bg-img section-md">
        <div class="container">
            <h2 class="text-center text-sm-start">User <span class="h2-style">Profile</span></h2>
            <?php
            $username = $_SESSION['username'];
            $std = "SELECT * FROM Sellers WHERE SellerUsername = '$username'";
            $row = mysqli_query($conn, $std);
            if ($row) {
                if (mysqli_num_rows($row) == 1) {
                    $row = $row->fetch_array(MYSQLI_ASSOC);
            ?>
                    <section class="section novi-bd novi-bg-img section-md">
                        <div class="row row-50 row-fix justify-content-center">
                            <div class="col-lg-3">

                                <figure class="box-team-figure" style="width: 250px;"><img src="https://ui-avatars.com/api/?name=<?= $row['SellerName'] ?>" alt="" width="270" height="135">
                                </figure>

                            </div>
                            <div class="col-lg-9">
                                <h2 class="text-center text-sm-start"><?= $row['SellerName'] ?></h2>
                                <div class="row row-50 row-fix justify-content-center">
                                    <div class="col-lg-6">
                                        <dt class="heading-5 mt-4">User Id</dt>
                                        <dd><?= $row['SellerID'] ?></dd>
                                        <dt class="heading-5 mt-4">Email</dt>
                                        <dd><?= $row['SellerEmail'] ?></dd>
                                        <dt class="heading-5 mt-4">Address</dt>
                                        <dd><?= $row['SellerAddress'] ?></dd>
                                    </div>
                                    <div class="col-lg-6">
                                        <dt class="heading-5 mt-4">Username</dt>
                                        <dd><?= $row['SellerUsername'] ?></dd>
                                        <dt class="heading-5 mt-4">Gender</dt>
                                        <dd><?= $row['SellerGender']  == "M" ? "Male" : "Female" ?></dd>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>

        </div>
    </section>
<?php
}
include('global-footer.php');
?>