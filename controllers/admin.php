<?php

class Admin extends Controller {


    function __construct() {
        parent::__construct();
        Auth::isAdmin();
    }
    
    public function index(){
        $this->view->render('header');
        $this->view->render('member/home');
    }

    public function member(){
        $this->view->render('header');
        $this->view->render('admin/member', [
            'info' => $this->model['admin']->getMember(),
            'jumlah' => $this->model['admin']->getJumlah()
        ]);
    }

    public function detail(){
        $id = $_GET['id'];
        $this->view->render('header');
        $this->view->render('admin/detailMember',[
            'info' => $this->model['user']->getInfoUser($id)
        ]);
    }

    public function vip(){
        $this->view->render('header');
        $this->view->render('admin/requestVip', [
            'info' => $this->model['admin']->getMemberRV(),
            'jumlah' => $this->model['admin']->getJumlahRV()
        ]);
    }

    public function vipApprove(){
        $data = array(
            'id'        => $_POST['id']
        );
        $this->model['admin']->simpanData($data);
        header('location: ' . URL . 'admin/vip');
    }

    public function vipDelete(){
        $data = array(
            'id'        => $_POST['id']
        );
        $this->model['admin']->simpanDataH($data);
        header('location: ' . URL . 'admin/vip');
    }

    public function hapusMember(){
        $id = $_POST['id'];
        $this->model['admin']->hapusMember($id);  
        header('location: ' . URL . 'admin/member'); 
    }
    
    public function logout(){
        Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }

}