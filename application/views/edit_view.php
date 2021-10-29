<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<h4>Form Edit Data</h4>
			<form action="<?php echo site_url('Insertdata/editdata');?>" method="post" class="form-horizontal">

				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Name</div>
					<div class="col-sm-2">
						<input type="text" name="m_name" required class="from-control" placeholder="name" value="<?php echo $rsedit->m_name;?>">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-2 coontrol-label">Lastname</div>
					<div class="col-sm-5">
						<input type="text" name="m_lname" required class="from-control" placeholder="lastrname" value="<?php echo $rsedit->m_lname;?>">
					</div>
					<div class="form-group row">
						<div class="col-sm-2 coontrol-label"></div>
						<div class="col-sm-6">
							<input type="hidden" name="my_id" value="<?php echo $rsedit->my_id;?>">

							<button type="submit" class="btn btn-primary">SAVE</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>