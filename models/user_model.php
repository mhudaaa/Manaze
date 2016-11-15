<?php

class User_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    // Untuk mendapatkan info user
    public function getInfo(){
        return $this->db->select('SELECT * FROM tb_member WHERE id = :id', 
            array('id' => $_SESSION['id']));
    }

    // get info user by ID
    public function getInfoUser($id){
        return $this->db->select('SELECT * FROM tb_member WHERE id = :id', 
            array('id' => $id));
    }
    
    // Register member baru
    public function registerUser($data){
        $this->db->insert('tb_member', array(
            'nama'      => $data['nama'],
            'email'     => $data['email'],
            'password'  => md5($data['password']),
            'avatar'    => $data['avatar'],
            'status'    => $data['status']
        ));
        Session::set('pesan', "<div class='suc-msg'><small>Registrasi berhasil. Data telah disimpan</small></div>");
    }
    
    // Mencari pemasukan terbesar
    public function pemasukanTerbesar(){
        return $this->db->select('SELECT jumlah FROM tb_pemasukan WHERE member = :member  ORDER BY jumlah DESC LIMIT 1',
            array('member' => $_SESSION['id']));   
    }

    // Mencari pengeluaranTerbesar
    public function pengeluaranTerbesar(){
        return $this->db->select('SELECT jumlah FROM tb_pengeluaran WHERE member = :member ORDER BY jumlah DESC LIMIT 1',
            array('member' => $_SESSION['id']));   
    }    

      // Mencari pemasukan terbesar berdasarkan ID
    public function pemasukanTerbesarID($id){
        return $this->db->select('SELECT jumlah FROM tb_pemasukan WHERE member = :member  ORDER BY jumlah DESC LIMIT 1',
             array('id' => $id));   
    }

    // Mencari pengeluaranTerbesar berdasarkan ID
    public function pengeluaranTerbesarID($id){
        return $this->db->select('SELECT jumlah FROM tb_pengeluaran WHERE member = :member ORDER BY jumlah DESC LIMIT 1',
             array('id' => $id));   
    }    

    // Update info user
    public function updateUser($data){
        $postData = array(
            'nama' => $data['nama'],
            'email' => $data['email'],
            'avatar' => $data['avatar']
        );
        
        $this->db->update('tb_member', $postData, "`id` = '{$data['id']}'");
        Session::set('pesan', "<span>Profil berhasil diperbarui</span>");
    }

    // member request vip
    public function getRequestVIP(){
        return $this->db->select('SELECT count(*) as jumlah FROM tb_member WHERE status = 1');
    }

    // Update request VIP
    public function updateRequest($data){
        $postData = array(
            'status' => 1
        );
        
        $this->db->update('tb_member', $postData, "`id` = '{$data['id']}'");
    }
}