<div class="wrap">
<h2>Add New Member</h2>

<?php
$full_name = "";
$department = "";
$semester = "";
$rollno = "";
$email = "";
$phone = "";

?>

<form name="clubmember-add-form" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
    <input type="hidden" name="clubmember_hidden" value="Y">
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Full Name</th>
            <td><input type="text" name="clubmember_name" value="<?php echo $full_name; ?>" /></td>
        </tr>
         
        <tr valign="top">
            <th scope="row">Department</th>
            <td><input type="text" name="clubmember_department" value="<?php echo $department; ?>" /></td>
        </tr>
        
        <tr valign="top">
            <th scope="row">Semester</th>
            <td><input type="text" name="clubmember_semester" value="<?php echo $semester; ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Class Roll</th>
            <td><input type="text" name="clubmember_rollno" value="<?php echo $rollno; ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Email</th>
            <td><input type="text" name="clubmember_email" value="<?php echo $email; ?>" /></td>
        </tr>

        <tr valign="top">
            <th scope="row">Phone</th>
            <td><input type="text" name="clubmember_phone" value="<?php echo $phone; ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button( "Add Member", "primary" ); ?>


</form>
</div>