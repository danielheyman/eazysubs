<?php
include 'init.php';
if (!is_authed()) 
{
    	header( 'Location: index.php' ) ;
}
session_unset ();
session_destroy ();
header( 'Location: index.php' ) ;
?>