<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2">
			<h4>Form Register</h4>
			<form action="<?php echo site_url('register/adding');?>" method="post" class="form-horizontal">
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
					<div class="col-sm-2 coontrol-label">Name</div>
					<div class="col-sm-5">
						<input type="text" name="name" required class="from-control" placeholder="name">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Lastname</div>
					<div class="col-sm-5">
						<input type="text" name="lastname" required class="from-control" placeholder="lastrname">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Email</div>
					<div class="col-sm-5">
						<input type="email" name="email" required class="from-control" placeholder="email">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Phone</div>
					<div class="col-sm-5">
						<input type="text" name="phone" required class="from-control" placeholder="phone">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label"></div>
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>