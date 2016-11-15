<?php

class Pengeluaran_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    // menampilkan daftar pengeluaran dalam bulan
    public function daftarPengeluaran(){
        return $this->db->select("SELECT DISTINCT (
                DATE_FORMAT( tgl_pakai,  '%M %Y' )
                ) AS month,MONTH( tgl_pakai ) bln, YEAR( tgl_pakai ) thn 
                FROM  `tb_pengeluaran` WHERE member = :member  ORDER BY tgl_pakai DESC", 
                array('member' => $_SESSION['id']));
    }

    // menampilkan daftar pengeluaran dalam satu bulan
    public function listPerBulan($bln,$thn){
        return $this->db->select("SELECT * 
                FROM  `tb_pengeluaran` WHERE member = :member AND MONTH(tgl_pakai) = :bln AND YEAR(tgl_pakai) = :thn ORDER BY tgl_pakai DESC", 
                array(
                    'member' => $_SESSION['id'],
                    'bln' => $bln,
                    'thn' => $thn
                ));
    }

    // Menampilkan informasi pengeluaran berdasarkan ID
    public function getPengeluaran($id){
        return $this->db->select('SELECT * FROM tb_pengeluaran WHERE no_pengeluaran = :id', 
            array('id' => $id));
    }

    // tambah data pengeluaran 
    public function tambahPengeluaran($data){
        $this->db->insert('tb_pengeluaran', array(
            'jumlah' => $data['jumlah'],
            'keterangan' => $data['keterangan'],
            'member' => $_SESSION['id']
        ));
        Session::set('pesan', "<span>Pengeluaran berhasil ditambahkan</span>");
    }

    // simpan hasil update pengeluaran
    public function editPengeluaran($data){
        $postData = array(
            'jumlah' => $data['jumlah'],
            'keterangan' => $data['keterangan'],
        );
        
        $this->db->update('tb_pengeluaran', $postData, "`no_pengeluaran` = '{$data['no_pengeluaran']}'");
        Session::set('pesan', "<span>Data Pengeluaran berhasil diubah</span>");
    }

    // Hapus data pemasukan
    public function hapusPengeluaran($id){
        $this->db->delete("tb_pengeluaran", "no_pengeluaran = $id");
        Session::set('pesan', "<span>Pengeluaran berhasil dihapus</span>");
    }

}