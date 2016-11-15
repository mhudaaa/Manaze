<?php

class Dashboard extends Controller {


    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    function index(){
        $this->view->render('header');
        $this->view->render('member/home');
    }
    
    function logout(){
        Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }

}