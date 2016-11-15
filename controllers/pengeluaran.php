<?php

class Pengeluaran extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
        
    // menampilkan daftar pengeluaran
    public function index() {
        $png = [];
        foreach ($this->model['pengeluaran']->daftarPengeluaran() as $row) {
            $a['bln'] = $row['month'];
            $a['list'] = $this->model['pengeluaran']->listPerBulan($row['bln'],$row['thn']);
            $png[] = $a;
        }
        $this->view->render('header');
        $this->view->render('member/pengeluaran', [
            'pengeluaran' => $png
        ]);
    }

    // Tambah data pengeluaran
    public function tambahData(){
        $data = array(
            'jumlah' => $_POST['jumlah'],
            'keterangan' => $_POST['keterangan']
        );
        $this->model['pengeluaran']->tambahPengeluaran($data);
        header('location: ' . URL . 'pengeluaran');
    }

    // Edit Pemasukan
    public function edit(){
        $id = $_POST['id'];
        $this->view->render('header');
        $this->view->render('member/editPengeluaran', [
            'pengeluaran' => $this->model['pengeluaran']->getPengeluaran($id)
        ]);
    }

    // menyimpan data hasil edit
    public function simpanData(){
        $data = array(
            'no_pengeluaran'=> $_POST['no_pengeluaran'],
            'jumlah'        => $_POST['jumlah'],
            'keterangan'    => $_POST['keterangan']
        );
        $this->model['pengeluaran']->editPengeluaran($data);
        header('location: ' . URL . 'pengeluaran');
    }

    // Hapus pengeluaran
    public function hapusPengeluaran(){
        $id = $_POST['id'];
        $this->model['pengeluaran']->hapusPengeluaran($id);  
        header('location: ' . URL . 'pengeluaran'); 
        // echo $id;
    }
}