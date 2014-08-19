<div class="wrap">
	<h2> View All Member</h2>
	<?php 
	 global $wpdb;
     $table_name = $wpdb->prefix."clubmember_users";

     $clubmembers = $wpdb->get_results(
     	"
		SELECT *
		FROM $table_name
     	"
     );

	?>

	<table class="widefat fixed">
		<thead>
			<tr>
				<th class="manage-column" scope="col">SL</th>
				<th class="manage-column" scope="col">Name</th>
				<th class="manage-column" scope="col">Department</th>
				<th class="manage-column" scope="col">Semester</th>
				<th class="manage-column" scope="col">Class Roll</th>
				<th class="manage-column" scope="col">Email</th>
				<th class="manage-column" scope="col">Phone</th>
				<th class="manage-column" scope="col">Status</th>
				<th></th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th class="manage-column" scope="col">SL</th>
				<th class="manage-column" scope="col">Name</th>
				<th class="manage-column" scope="col">Department</th>
				<th class="manage-column" scope="col">Semester</th>
				<th class="manage-column" scope="col">Class Roll</th>
				<th class="manage-column" scope="col">Email</th>
				<th class="manage-column" scope="col">Phone</th>
				<th class="manage-column" scope="col">Status</th>
				<th></th>
			</tr>
		</tfoot>
		<tbody id="the-list">
		<?php
		if($clubmembers){ 
			$serialNo=1;
			foreach ($clubmembers as $members) {
				
		?>
			<tr class="alternate">
				<td><?php echo $serialNo++ ?></td>
				<td><?php echo $members->full_name ?></td>
				<td><?php echo $members->department ?></td>
				<td><?php echo $members->semester ?></td>
				<td><?php echo $members->class_roll ?></td>
				<td><?php echo $members->email ?></td>
				<td><?php echo $members->phone ?></td>
				<td><?php echo $members->status ?></td>
				<td><a href="/wp-admin/admin.php?page=clubmember-update-member&id=<?php echo $members->id ?>">Edit</a></td>
			</tr>

		<?php } ?>
		<?php }else{ ?>
			<tr class="alternative">
				<td colspan="8">
					Not found
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>