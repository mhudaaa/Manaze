<?php

class Profil extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index() {
        $this->view->render('header');
        $this->view->render('member/profil',[
        	'pemasukan' => $this->model['user']->pemasukanTerbesar(),
        	'pengeluaran' => $this->model['user']->pengeluaranTerbesar(),
            'info' => $this->model['user']->getInfo()
    	]);
    }

    public function vip() {
        $this->view->render('header');
        $this->view->render('member/vip', [
            'info' => $this->model['user']->getInfo()
        ]);
    }

    public function edit() {
        $this->view->render('header');
        $this->view->render('member/editProfil', [
            'info' => $this->model['user']->getInfo()
        ]);
    }

    // update data user
    public function simpanData(){
        $data = array(
            'id'        => $_POST['id'],
            'nama'      => $_POST['nama'],
            'email'     => $_POST['email'],
            'avatar'    => $_POST['avatar']
        );
        $this->model['user']->updateUser($data);
        header('location: ' . URL . 'profil');
    }

    // request vip
    public function requestVip(){
        $data = array(
            'id'        => $_POST['id']
        );
        $this->model['user']->updateRequest($data);
        header('location: ' . URL . 'profil/vip');
    }

}