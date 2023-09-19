<?php include_once ('header.php');?>


<div class="container">
    <div class="row login-wrapper">
        <div class="col-sm-4 offset-2 login-img">
            <img src="assets/images/kothabarta-avater.png" alt="Login User Image"></div>
        <div class="col-sm-4 offset-">
            <div class="member-login"> Member Login</div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input type="submit" value=" Login" class="btn btn-block member-login-submit">
            <div class="forget-pass"> Forget <a href="reset-password.php"> Username / Password </a></div>
            <div class="create-account">Create <a href="registration.php"> Account <i class="fas fa-arrow-right"></i></a></div>

        </div>
    </div>
</div>


<?php include_once ('footer.php');?>