<?php
/**
* admin menu for wordpress
*/

function clubmember_admin_menu(){
	/* top level menu */
	add_menu_page(
				"Club Members", 
		        "Club Members", 
		        "manage_options", 
		        "clubmember-view-all", 
		        "clubmember_view_all_page",
		        "",
		        '28'
		    );
	add_submenu_page("clubmember-view-all","View All Member", "View All", "manage_options", "clubmember-view-all");
	add_submenu_page("clubmember-view-all","Add New Member", "Add Member", "manage_options", "clubmember-add-member", "clubmember_add_member_page" );
}

add_action("admin_menu", "clubmember_admin_menu");

/**
* view all members
*/
function clubmember_view_all_page(){
	echo "View all member";
}

/* Add new member page */
function clubmember_add_member_page(){
	echo "Add a new member";
}


