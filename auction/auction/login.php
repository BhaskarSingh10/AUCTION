<?php
include('global-header.php');
?>
<section class="section novi-bg novi-bg-img section-md bg-default text-center section-top-shadow">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <h3>Login form</h3>
                <form action="services/login-service.php" method="POST" class="rd-form rd-mailform rd-form-centered">
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="username" type="text" name="username" required>
                        <label class="form-label rd-input-label" for="username">Username</label>
                    </div>
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="ppwd" type="password" name="ppwd" required>
                        <label class="form-label rd-input-label" for="ppwd">Password</label>
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