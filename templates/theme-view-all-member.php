<div class="wrap">
	<?php 
	 global $wpdb;
     $table_name = $wpdb->prefix."clubmember_users";

     $clubmembers = $wpdb->get_results(
     	"
		SELECT *
		FROM $table_name
		WHERE status='1'
     	"
     );

	?>

	<table class="clubmember-all">
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Department</th>
				<th>Semester</th>
				<th>Class Roll</th>
				<th>Email</th>
				<!-- <th class="manage-column" scope="col">Phone</th> -->
			</tr>
		</thead>
		<tbody>
		<?php
		if($clubmembers){ 
			$serialNo=1;
			foreach ($clubmembers as $members) {
		?>
			<tr>
				<td><?php echo $serialNo++ ?></td>
				<td><?php echo $members->full_name ?></td>
				<td><?php echo $members->department ?></td>
				<td><?php echo $members->semester ?></td>
				<td><?php echo $members->class_roll ?></td>
				<td><?php echo $members->email ?></td>
				<!-- <td><?php //echo $members->phone ?></td> -->
			</tr>

		<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="8">
					Not found
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>