<footer class="footer novi-bg novi-bg-img">
    <div class="footer-content">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-3 col-sm-6">
                    <h4 class="footer-title">Useful Links</h4>
                    <ul class="footer-list list-xs">
                        <li><a class="footer-link" href="index.php#about">About Us</a></li>
                        <?php
                        if (isset($_SESSION['loggedIn'])) {
                        ?>
                            <li><a class="footer-link" href="userprofile.php">Account</a></li>
                        <?php
                        }
                        ?>
                        <li><a class="footer-link" href="register.php">Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-panel">
        <div class="container">
            <p class="rights"><span>©&nbsp; </span><span class="copyright-year">2023</span><span>&nbsp;</span><span>Auction</span><span>.&nbsp;</span></p>
        </div>
    </div>
</footer>
</div>
<script src="countdown.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
</body>

</html>