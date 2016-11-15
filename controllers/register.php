<?php

class Register extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    function index(){    
        $this->view->render('header');
        $this->view->render('register');
    }
    
    public function add(){
        $pass   = $_POST['password'];
        $passc  = $_POST['cpassword'];

        if ($pass !== $passc) {
            Session::init();
            Session::set('pesan', "<div class='err-msg'><small>Registrasi gagal. Password harus sama</small></div>");
        } else{
            $data = array(
                'nama'      => $_POST['nama'],
                'email'     => $_POST['email'],
                'password'  => md5($pass),
                'avatar'    => 1,
                'status'    => 0,
            );
            $this->model['user']->registerUser($data);
        }

        header('location: ' . URL . 'register');
    }
    

}