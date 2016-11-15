<?php

class Pemasukan extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index() {
        $pmsk = [];
        foreach ($this->model['pemasukan']->daftarPemasukan() as $row) {
            $a['bln'] = $row['mont'];
            $a['list'] = $this->model['pemasukan']->listPerBulan($row['bln'],$row['thn']);
            $pmsk[] = $a;
        }
        $this->view->render('member/pemasukan',['pemasukan' => $pmsk]);
        $this->view->render('header');
    }

    public function tambah() {
        $this->view->render('header');
        $this->view->render('member/tambah');
    }

    public function tambahData(){
        $data = array(
            'jumlah' => $_POST['jumlah'],
            'keterangan' => $_POST['keterangan']
        );
        $this->model['pemasukan']->tambahPemasukan($data);
        header('location: ' . URL . 'pemasukan');
    }

    // Menampilkan form edit pemasukan
    public function edit(){
        $id = $_POST['id'];
        $this->view->render('header');
        $this->view->render('member/editPemasukan', [
            'pemasukan' => $this->model['pemasukan']->getPemasukan($id)
        ]);
    }

    // menyimpan data hasil edit
    public function simpanData(){
        $data = array(
            'no_pemasukan'  => $_POST['no_pemasukan'],
            'jumlah'        => $_POST['jumlah'],
            'keterangan'    => $_POST['keterangan']
        );
        $this->model['pemasukan']->editPemasukan($data);
        header('location: ' . URL . 'pemasukan');
    }

    public function hapusPemasukan(){
        $id = $_POST['id'];
        $this->model['pemasukan']->hapusPemasukan($id);  
        header('location: ' . URL . 'pemasukan'); 
        // echo $id;
    }
    
}