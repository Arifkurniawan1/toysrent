<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mmbr_model extends CI_Model
{

    function get_barang(){
        $result = $this->db->query("select * from barang");
        return $result;
    }

    function get_pagination($limit,$offset){
        $result='';
        if($offset== NULL){
            $result = $this->db->query("select * from kategori_item ORDERS LIMIT $limit");
        }else{
            $result = $this->db->query("select * from kategori_item ORDERS LIMIT $limit OFFSET $offset");
        }
        return $result;
    }



}