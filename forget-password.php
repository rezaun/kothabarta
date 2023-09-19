<?php include_once ('header.php');?>


    <div class="container">
        <div class="row login-wrapper">

            <div class="col-sm-6 offset-3">
                <div class="member-login"> Forget Your Password</div>
                <p class="reset-note">Enter Your Email Address and we'll send you a link to reset your password</p>
                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" name="username" aria-label="Email" aria-describedby="basic-addon1">
                    </div>


                    <input type="submit" value=" Reset Password" class="btn btn-block member-login-submit custom-btn-common">
                </form>
                <div class="forget-pass "> Back to <a href="login.php"> Member Login </a></div>


            </div>
        </div>
    </div>


<?php include_once ('footer.php');?>