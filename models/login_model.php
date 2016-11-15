<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
        Session::init();
    }

    public function run() {
        Session::set('pesan', '');
        $sth = $this->db->prepare("SELECT id, status FROM tb_member WHERE 
                email = :email AND password = :password");
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':password' => md5($_POST['password'])
        ));

        $data = $sth->fetch();

        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::set('id', $data['id']);
            Session::set('status', $data['status']);
            $status = Session::get('status');

            if ($status == 0 || $status == 1) {
                Session::set('loggedIn', 'isMember');
                header('location: ../dashboard');
            } elseif ($status == 2) {
                Session::set('loggedIn', 'isVip');
                header('location: ../dashboard');
            } elseif ($status == 3) {
                Session::set('loggedIn', 'isAdmin');
                header('location: ../admin');
            }

        } else {
            Session::set('pesan', "<div class='err-msg'><small>Email atau password salah</small></div>");
            header('location: ../login');
        }
    }

}
