<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_model extends CI_Model
{

    function get_item(){
        $result = $this->db->query("select * from item");
        return $result;
    }
    function get_pemesanan(){
        $result = $this->db->query("select * from pemesanan");
        return $result->result();
    }

    function valid_item($nama){
        $result= $this->db->query("select * from item where LOWER(nama)='$nama'");
        return $result;
    }

    function data_update($nama){
    $result=$this->db->query("select * from item a join kategori_item b on a.nama=b.nama_item where a.nama='$nama'")->row_array();
    return $result;
    }

}