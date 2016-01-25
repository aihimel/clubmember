<div class="wrap">
<h2>Add New Member</h2>

<?php
    if($_POST['clubmember_hidden'] == 'Y') {
        $member_data = array(
            "full_name"=>$_POST['clubmember_name'],
            "department"=>$_POST['clubmember_department'],
            "semester"=>$_POST['clubmember_semester'],
            "class_roll"=>$_POST['clubmember_rollno'],
            "email"=>$_POST['clubmember_email'],
            "phone"=>$_POST['clubmember_phone']
        );

        $inserted = cm_add_single_member($member_data);

        if($inserted){
           //Form data sent
        ?>
           <div class="clubmember-updated"><p><strong><?php _e('Club Member Added Successfully.' ); ?></strong></p></div>
        <?php }else{
            echo "Error";
        }
?>

<?php
    } else {
        //Normal page display
?>

<form name="clubmember-add-form" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="clubmember_hidden" value="Y">
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Full Name</th>
            <td><input type="text" name="clubmember_name" value="" /></td>
        </tr>
         
        <tr valign="top">
            <th scope="row">Department</th>
            <td><input type="text" name="clubmember_department" value="" /></td>
        </tr>
        
        <tr valign="top">
            <th scope="row">Semester</th>
            <td><input type="text" name="clubmember_semester" value="" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Class Roll</th>
            <td><input type="text" name="clubmember_rollno" value="" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Email</th>
            <td><input type="text" name="clubmember_email" value="" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Phone</th>
            <td><input type="text" name="clubmember_phone" value="" /></td>
        </tr>
    </table>
    
    <?php submit_button( "Add Member", "primary" ); ?>


</form>

<?php } ?>

</div>