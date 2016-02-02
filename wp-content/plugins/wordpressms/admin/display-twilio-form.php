	<?php
		$showMessage = false;
		$id = get_option("accountSID");
		$token = get_option("authToken");
		$phone = get_option("phoneNumber");

		if (isset($_POST["update_settings"])) :
			$accountSID = esc_attr($_POST["accountSID"]); 
			$authToken = esc_attr($_POST["authToken"]);
			$phoneNumber = esc_attr($_POST["phoneNumber"]);

			update_option("accountSID", $accountSID);
			update_option("authToken", $authToken);
			update_option("phoneNumber", $phoneNumber);
			$showMessage = true;
		endif;


	?>
<div class="wrap" id="twilio">
	<h2>Twilio Credentials</h2>
	<div class="container-fluid twilio-form">

		<?php if($showMessage == true): ?>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div id="message" class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					Credentials saved.
				</div>
			</div>
		</div>
		<?php endif; ?> 

		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="panel panel-default">
						<div class="panel-body">
						<form method="POST" action="">
							<input type="hidden" name="update_settings" value="Y" />
							<div class="form-horizontal">
					            <div class="form-group">
					            	<label class="col-sm-3 control-label" for="accountSID">Account SID: </label>
					            	<div class="col-sm-9">
					            		<input class="form-control" type="text" name="accountSID" placeholder="Account SID" value="<?php if($id) echo $id; ?>">
					            	</div>
					            </div>
					            <div class="form-group">
					            	<label class="col-sm-3 control-label" for="authToken">AuthToken: </label>
					            	<div class="col-sm-9">
					            		<input class="form-control" type="text" name="authToken" placeholder="AuthToken" value="<?php if($token) echo $token; ?>">
					            	</div>
					            </div>
					            <div class="form-group">
					            	<label class="col-sm-3 control-label" for="phoneNumber">Phone Number: </label>
					            	<div class="col-sm-9">
					            		<input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number" value="<?php if($phone) echo $phone;?>">
					            	</div>
					            </div>
					            <div class="form-group">
					            	<label class="col-sm-3 control-label" for="submit"></label>
					            	<div class="col-sm-3">
					            		<button type="submit" value="Save Credentials" class="btn btn-primary">Save Credentials</button>
					            	</div>
					            </div>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>