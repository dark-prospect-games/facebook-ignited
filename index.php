<?php
/**
 * Include the library and it's configuration file.
 */
include('libraries/Fb_ignited.php');
include ('libraries/fb_config.php');
$fb_ignited = new Fb_ignited($config);
$fb_me = $fb_ignited->fb_get_me();
$fb_app = $fb_ignited->fb_get_app();
/**
 * TODO: Add more test content.
 */