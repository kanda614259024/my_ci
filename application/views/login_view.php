<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<h4>Form Login</h4>
			<form action="<?php echo site_url('register/showlogin');?>" method="post" class="form-horizontal">
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Username</div>
					<div class="col-sm-5">
						<input type="text" name="usename" required class="from-control" placeholder="username">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Password</div>
					<div class="col-sm-5">
						<input type="password" name="password" required class="from-control" placeholder="password">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label"></div>
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>