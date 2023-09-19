<?php include_once ('header.php');?>


	<div class="container">
		<div class="row login-wrapper">
			<div class="col-sm-12">
                <form>
				<div class="card ">
					<div class="card-header text-center">
						<h5><b>Pusher Settings</b></h5>
					</div>
					<div class="card-body ">
						<div class="row ">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="appID">App ID:</label>
                                    <input type="text" name="appId" class="form-control" id="appID" aria-describedby="appIDHelp">
                                    <small id="appIDHelp" class="form-text text-muted">Please Put Your ID here</small>
                                </div>
                                <div class="form-group">
                                    <label for="key">Key</label>
                                    <input type="text" name="key" class="form-control" id="key" aria-describedby="keyHelp">
                                    <small id="keyHelp" class="form-text text-muted">Please Put your Key here</small>
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="cluster">Cluster</label>
                                    <input type="text" class="form-control" id="cluster" aria-describedby="clusterHelp">
                                    <small id="clusterHelp" class="form-text text-muted">Please Put cluster here</small>
                                </div>
                                <div class="form-group">
                                    <label for="secret">Secret</label>
                                    <input type="text" name="secret" class="form-control" id="secret" aria-describedby="secretHelp">
                                    <small id="secretHelp" class="form-text text-muted">Please Put your Secret here</small>
                                </div>

                            </div>


						</div>

					</div><!-- End .card-body -->
				</div><!-- End .card -->
				<div class="card ">
					<div class="card-header text-center">
						<h5><b>Twillio Settings</b></h5>
					</div>
					<div class="card-body ">
						<div class="row ">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="sid">SID</label>
                                    <input type="text" class="form-control" id="sid" aria-describedby="sidHelp">
                                    <small id="sidHelp" class="form-text text-muted">please write your SID here</small>
                                </div>
                                <div class="form-group">
                                    <label for="token">Token</label>
                                    <input type="text" class="form-control" id="token" aria-describedby="tokenHelp">
                                    <small id="tokenHelp" class="form-text text-muted">Please write your Token here</small>
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="key">key</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="keyHelp">
                                    <small id="keyHelp" class="form-text text-muted">Please write Key here</small>
                                </div>
                                <div class="form-group">
                                    <label for="secret">Secret</label>
                                    <input type="text" class="form-control" id="secret" aria-describedby="secretHelp">
                                    <small id="secretHelp" class="form-text text-muted">Please write scret here</small>
                                </div>

                            </div>
                            <div class="col text-center mt-5"><input type="submit" class=" btn btn-primary btn-lg custom-btn-common"></div>

						</div>

					</div><!-- End .card-body -->
				</div><!-- End .card -->
    </form>

			</div><!-- End col-sm-12 -->


		</div><!-- login-wrapper -->
	</div> <!-- End container Here -->

<?php include_once ('footer.php');?>