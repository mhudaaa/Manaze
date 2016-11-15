<?php

class Pemasukan_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    // Menampilkan daftar pemasukan
    public function daftarPemasukan(){
        return $this->db->select("SELECT DISTINCT (
                DATE_FORMAT( tgl_masuk,  '%M %Y' )
                ) AS mont,MONTH( tgl_masuk ) bln, YEAR( tgl_masuk ) thn 
                FROM  `tb_pemasukan` WHERE member = :member  ORDER BY tgl_masuk DESC", 
                // array('member' => 1));
                array('member' => $_SESSION['id']));
    }

    // Menampilkan daftar pemasukan dalam satu bulan
    public function listPerBulan($bln,$thn){
        return $this->db->select("SELECT * 
                FROM  `tb_pemasukan` WHERE member = :member AND MONTH(tgl_masuk) = :bln AND YEAR(tgl_masuk) = :thn ORDER BY tgl_masuk DESC", 
                // array('member' => 1));
                array(
                    'member' => $_SESSION['id'],
                    'bln' => $bln,
                    'thn' => $thn
                ));
    }

    // Menampilkan informasi pemasukan berdasarkan ID
    public function getPemasukan($id){
        return $this->db->select('SELECT * FROM tb_pemasukan WHERE no_pemasukan = :id', 
            array('id' => $id));
    }

    // Tambah data pemasukan
    public function tambahPemasukan($data){
        $this->db->insert('tb_pemasukan', array(
            'jumlah' => $data['jumlah'],
            'keterangan' => $data['keterangan'],
            'member' => $_SESSION['id']
        ));
        Session::set('pesan', "<span>Pemasukan berhasil ditambahkan</span>");
    }

    // menyimpan hasil update pemasukan
    public function editPemasukan($data){
        $postData = array(
            'jumlah' => $data['jumlah'],
            'keterangan' => $data['keterangan'],
        );
        
        $this->db->update('tb_pemasukan', $postData, "`no_pemasukan` = '{$data['no_pemasukan']}'");
        Session::set('pesan', "<span>Data Pemasukan berhasil diubah</span>");
    }

    // Hapus data pemasukan
    public function hapusPemasukan($id){
        $this->db->delete("tb_pemasukan", "no_pemasukan = $id");
        Session::set('pesan', "<span>Pemasukan berhasil dihapus</span>");
    }

}