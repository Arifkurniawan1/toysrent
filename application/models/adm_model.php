<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_model extends CI_Model
{
    //ITEM
    function get_item(){
        $result = $this->db->query("select * from item");
        return $result;
    }
    function valid_item($nama){
        $result= $this->db->query("select * from item where LOWER(nama)='$nama'");
        return $result;
    }
    function item_update($nama){
    $result=$this->db->query("select * from item a join kategori_item b on a.nama=b.nama_item where a.nama='$nama'")->row_array();
    return $result;
    }

    //PEMESANAN
    function get_pemesanan(){
        $result = $this->db->query("select * from pemesanan");
        return $result->result();
    }


    //BARANG
    function get_barang(){
        $result = $this->db->query("select * from barang");
        return $result;
    }
    function barang_update($id){
    $result=$this->db->query("select B.*,p.nama_lengkap from barang B left join pengguna p on B.no_ktp_penyewa = p.no_ktp where id_barang = '$id'")->row_array();
    return $result;
    }
    function barang_update_bronze($id){
    $result=$this->db->query("select * from info_barang_level where id_barang = '$id' and nama_level = 'BRONZE'")->row_array();
    return $result;
    }
    function barang_update_silver($id){
    $result=$this->db->query("select * from info_barang_level where id_barang = '$id' and nama_level = 'SILVER'")->row_array();
    return $result;
    }
    function barang_update_gold($id){
    $result=$this->db->query("select * from info_barang_level where id_barang = '$id' and nama_level = 'GOLD'")->row_array();
    return $result;
    }


}
