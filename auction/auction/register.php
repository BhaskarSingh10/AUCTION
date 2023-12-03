<?php
include('global-header.php');
?>
<section class="section novi-bg novi-bg-img section-md bg-default text-center section-top-shadow">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <h3>Registration form</h3>
                <form action="services/register-service.php" method="POST" class="rd-form rd-mailform rd-form-centered">
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="username" type="text" name="username" required>
                        <label class="form-label rd-input-label" for="username">Username</label>
                    </div>
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="ppwd" type="password" name="ppwd" required>
                        <label class="form-label rd-input-label" for="ppwd">Password</label>
                    </div>
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="name" type="text" name="name" required>
                        <label class="form-label rd-input-label" for="name">Name</label>
                    </div>
                    <div class="form-wrap">
                        <input onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="email" type="email" name="email" required>
                        <label class="form-label rd-input-label" for="email">Email</label>
                    </div>
                    <div class="form-wrap">
                        <select onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-wrap">
                        <textarea onfocus="this.nextElementSibling.style.visibility='hidden'" onblur="if(!this.value) this.nextElementSibling.style.removeProperty('visibility')" class="form-input form-control-has-validation" id="address" name="address" required></textarea>
                        <label class="form-label rd-input-label" for="address">Address</label>
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