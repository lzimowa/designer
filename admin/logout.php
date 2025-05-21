<?php
    session_start();
    /** logout.php 
     *  this script signs out a user. it destroys the session, 
     *  @author FreeUser
     *  @copyright 2013
    */
    if ( !isset( $_SESSION['loggedIn'] ) ) {
        header( 'Location: index.html' );
        exit;
    } else {
        session_destroy();
        setcookie( session_name(), '', time()-300 );
        header( 'Location: index.html' );
        exit;
    }

