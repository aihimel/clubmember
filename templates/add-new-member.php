<?php
add_action( 'admin_init', 'clubmember_register_mysettings' );
function clubmember_register_mysettings() {

	register_setting( 'clubmember_add', 'clubmember_name' );
	register_setting( 'clubmemer_add', 'clubmember_department' );
	register_setting( 'clubmember_add', 'clubmember_semester' );
}

?>

<div class="wrap">
<h2>Add New Member</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'clubmember_add' ); ?>
    <?php do_settings_sections( 'clubmember_add' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Full Name</th>
        <td><input type="text" name="clubmember_name" value="<?php echo get_option('clubmember_name'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Department</th>
        <td><input type="text" name="clubmember_department" value="<?php echo get_option('clubmember_department'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Semester</th>
        <td><input type="text" name="clubmember_semester" value="<?php echo get_option('clubmember_semester'); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>