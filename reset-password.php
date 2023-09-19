<?php include_once ('header.php');?>


    <div class="container">
        <div class="row login-wrapper">

            <div class="col-sm-6 offset-3">
                <div class="member-login"> Reset Your Password</div>
                <form action="">

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
                        <input type="password" class="form-control" name="Confirm Password" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
                    </div>
                    <input type="submit" value=" Save" class="btn btn-block member-login-submit custom-btn-common">
                </form>
                


            </div>
        </div>
    </div>


<?php include_once ('footer.php');?>