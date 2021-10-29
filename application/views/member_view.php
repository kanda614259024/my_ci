<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h4>Show Member</h4>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>img</th>
						<th>name</th>
						<th>lname</th>
						<th>datesave</th>
						<th>edit</th>
						<th>del</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query as $rs) { ?>
					<tr>
						<td><?php echo $rs->my_id;?></td>
						<td>
							<img src="<?php echo base_url('img');?>/<?php echo $rs->m_img;?>" width="100px">
						</td>
						<td><?php echo $rs->m_name;?></td>
						<td><?php echo $rs->m_lname;?></td>
						<td><?php echo $rs->m_datesave;?></td>
						<td>
							<a href="<?php echo site_url('insertdata/edit/').$rs->my_id;?>">edit</a>
						</td>
						<td>
							<a href="<?php echo site_url('insertdata/del/').$rs->my_id;?>" onclick="return confirm('ยืนยัน');">del</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>