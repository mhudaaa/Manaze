<?php
/**
 * 
 */
class Auth{


    public static function handleLogin(){
        @session_start();
        $logged = $_SESSION['loggedIn']; 
        if ($logged == '') {
            session_destroy();
            header('location: ' .URL. 'login');
            exit;
        } else{
            return true;
        }
    }

    public static function isAdmin(){
        @session_start();
        $logged = $_SESSION['loggedIn']; 
        if ($logged == 'isAdmin') {
            return true;
        } else{
            // session_destroy();
            header('location: ' .URL. 'login');
            // exit;
        }
    }
    

}