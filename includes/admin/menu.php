<?php
/**
* admin menu for wordpress
*/

function clubmember_admin_menu(){
	/* top level menu */
	add_menu_page(
				"Club Member page", 
		        "Club Member", 
		        "manage_options", 
		        "club-member-admin-menu", 
		        "clubmember_admin_page",
		        "",
		        '28'
		    );


}

add_action("admin_menu", "clubmember_admin_menu");


function clubmember_admin_page(){
	echo "Muu";
}