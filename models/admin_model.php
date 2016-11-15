<?php

class Admin_Model extends Model{

    public function __construct(){
        parent::__construct();
    }

    // STATUS
    // 0 = Member
    // 1 = Request VIP
    // 2 = VIP
    // 3 = Admin

    // Untuk mendapatkan info user
    public function getMember(){
        return $this->db->select('SELECT id, nama, status, email FROM tb_member WHERE status <> 3');
    }

    // mendapatkan jumlah member
    public function getJumlah(){
        return $this->db->select('SELECT count(*) as jumlah FROM tb_member WHERE status <> 3');
    }


    // Untuk mendapatkan info user request Vip
    public function getMemberRV(){
        return $this->db->select('SELECT id, nama, status, email, tgl_daftar FROM tb_member WHERE status = 1');
    }

    // mendapatkan jumlah member request Vip
    public function getJumlahRV(){
        return $this->db->select('SELECT count(*) as jumlah FROM tb_member WHERE status = 1');
    }

    // update VIP status
    public function simpanData($data){
        $postData = array(
            'status' => 2
        );
        
        $this->db->update('tb_member', $postData, "`id` = '{$data['id']}'");
        Session::set('pesan', "<span>Berhasil menambahkan VIP</span>");
    }

    public function simpanDataH($data){
        $postData = array(
            'status' => 0
        );
        
        $this->db->update('tb_member', $postData, "`id` = '{$data['id']}'");
        Session::set('pesan', "<span>Berhasil menghapus permintaan VIP</span>");
    }

    // hapus member
    public function hapusMember($id){
        if($this->db->delete("tb_member", "id = $id")){
            Session::set('pesan', "<span>Member berhasil dihapus</span>");
        }
    }

}