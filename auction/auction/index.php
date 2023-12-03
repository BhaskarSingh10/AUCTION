<?php
include('global-header.php');
?>
<section class="section novi-bg novi-bg-img section-xl section-banner-classic bg-primary text-center text-lg-left" style="background-image: url(hero.webp)">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-classic">
          <h1>The best place <span class="d-block font-weight-bold">to buy and sell!</span>
          </h1><a class="button button-icon button-icon-right button-black button-lg" href="register.php">Register</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section novi-bg novi-bg-img section-lg bg-white section-top-shadow" id="current-auction">
  <div class="container">
    <h2 class="text-center text-sm-start">Current <span class="h2-style">Auctions</span></h2>
    <div class="row row-50 mt-50">
      <?php
      $std = "SELECT * FROM Auctions WHERE Status = 'Open'";
      $result = mysqli_query($conn, $std);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="post-modern">
              <div class="post-modern-countdown countdown is-countdown" style="display:none" startTime="<?= $row['StartTime'] ?>" endTime="<?= $row['EndTime'] ?>"><span class="countdown-row countdown-amount"></span></div>
              <figure class="post-modern-figure"><img src="./<?= $row['ItemImageURL'] ?>" alt="<?= $row['ItemName'] ?>" width="270" height="108">
              </figure>
              <div class="post-modern-caption">
                <div class="post-modern-price">Price: $<?= $row['StartingPrice'] ?></div>
                <div class="post-modern-price-value"><?= $row['CurrentPrice'] ?></div>
                <h5 class="post-modern-link"><a href="#current-auction"><?= $row['ItemName'] ?></a></h5>
                <span class="h2-style" title="<?= $row['ItemDescription'] ?>"><?= mb_strlen($row['ItemDescription']) > 65 ? mb_substr($row['ItemDescription'], 0, 65) . "..." : $row['ItemDescription'] ?></span>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
      }
      $conn->close();
      ?>
    </div>
    <div class="mt-xl-40 mt-50 text-center text-sm-start"><a class="button button-icon button-icon-right button-black" href="auctions.php">View all auctions</a></div>
  </div>
</section>
<section class="section novi-bg novi-bg-img section-lg" id="about">
  <div class="container">
    <div class="row row-50">
      <h2 class="text-center text-sm-start">About <span class="h2-style">Us</span></h2>
      <div class="col-lg-6">
        <div class="row row-30">
          <div class="col-12">
            <div class="box-modern">
              <div class="box-modern-header">
                <h5 class="box-modern-title" style="width: 240px">Quality products for the best customers</h5>
              </div>
              <p class="box-modern-body">With main offices in San Francisco, CA and Phoenix, AZ, Online Auction offers a large range of high-quality products at wholesale pricing. We make every effort to ensure that our customers are entirely satisfied with their purchase.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row row-30 box-modern-index">
          <div class="col-12">
            <!-- Box Moder-->
            <div class="box-modern">
              <div class="box-modern-header">
                <h5 class="box-modern-title" style="width: 240px">More than 20 years of auction experience</h5>
              </div>
              <p class="box-modern-body">We have the experience and understanding to handle any sort of auction. We handle anything from small local sales to multi-day, multi-million dollar auctions. Our services are tailored to each client's specific requirements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('global-footer.php');
?>