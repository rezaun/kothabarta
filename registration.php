<?php include_once ('header.php');?>


    <div class="container">
        <div class="row login-wrapper">

            <div class="col-sm-6 offset-3">
                <div class="member-login"> Member Registration</div>
                <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" name="username" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <input type="submit" value="Registration" class="btn btn-block member-login-submit custom-btn-common ">
                </form>
                <div class="forget-pass "> Have Account ? <a href="login.php"> Login </a></div>


            </div>
        </div>
    </div>


<?php include_once ('footer.php');?>