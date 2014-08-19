<?php
    $member_id = $_GET['id'];
    global $wpdb;
    $table_name = $wpdb->prefix."clubmember_users";
    $member = $wpdb->get_row("SELECT * FROM $table_name WHERE id=$member_id");

?>

<div class="wrap">
<h2>Edit Member</h2>

<?php
    if($_POST['clubmember_hidden'] == 'Y') {
        $full_name = $_POST['clubmember_name'];
        $department = $_POST['clubmember_department'];
        $semester = $_POST['clubmember_semester'];
        $rollno = $_POST['clubmember_rollno'];
        $email = $_POST['clubmember_email'];
        $phone = $_POST['clubmember_phone'];
        $status = $_POST['clubmember_status'];

        $update_status=$wpdb->update(
            $table_name,
            array(
                "full_name"=>$full_name,
                "department"=>$department,
                "semester"=>$semester,
                "class_roll"=>$rollno,
                "email"=>$email,
                "phone"=>$phone,
                "status"=>$status
            ),
            array("id"=>$member_id),
            array(
                "%s",
                "%s",
                "%s",
                "%s",
                "%s",
                "%s",
                "%s"
            ),
            array("%d")
        );

        if($update_status){
           //Form data sent
        ?>
           <div class="clubmember-updated"><p><strong><?php _e('Updated Successfully.' ); ?></strong></p></div>
        <?php }else{
            echo "Error";
        }


?>

<?php
    } else {   
        if($member_id){
?>

<form name="clubmember-add-form" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="clubmember_hidden" value="Y">
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Full Name</th>
            <td><input type="text" name="clubmember_name" value="<?php echo $member->full_name ?>" /></td>
        </tr>
         
        <tr valign="top">
            <th scope="row">Department</th>
            <td><input type="text" name="clubmember_department" value="<?php echo $member->department ?>" /></td>
        </tr>
        
        <tr valign="top">
            <th scope="row">Semester</th>
            <td><input type="text" name="clubmember_semester" value="<?php echo $member->semester ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Class Roll</th>
            <td><input type="text" name="clubmember_rollno" value="<?php echo $member->class_roll ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Email</th>
            <td><input type="text" name="clubmember_email" value="<?php echo $member->email ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Phone</th>
            <td><input type="text" name="clubmember_phone" value="<?php echo $member->phone ?>" /></td>
        </tr>
        <tr valign="top">
            <th scope="row">Status</th>
            <td><input type="text" name="clubmember_status" value="<?php echo $member->status ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button( "Update Member", "primary" ); ?>


</form>

<?php }} ?>

</div>