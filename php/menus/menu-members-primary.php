<?php 
    /**
     * php/menus/menu-members-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.07.11)
     * @copyright 2024 (2024.07.11)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-9',
            'menu_id' => 'Members-Primary'
        )
    );
?>