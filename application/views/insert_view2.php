<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<h4>Form Add Data</h4>
			<form action="<?php echo site_url('insertdata/adding2');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Name</div>
					<div class="col-sm-2">
						<input type="text" name="m_name" required class="from-control" placeholder="name">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Lastname</div>
					<div class="col-sm-5">
						<input type="text" name="m_lname" required class="from-control" placeholder="lastrname">
				</div>
			</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">img</div>
					<div class="col-sm-5">
						<input type="file" name="m_img" required accept="image/*" >
				</div>
			</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label"></div>
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary">SAVE</button>
					</div>
				</div>
						
			</form>
		</div>
	</div>
</div>