<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mmbr_model');

    }
    function index(){
        $item['data']=$this->mmbr_model->get_barang();
        $this->load->view('main_member',$item);
    }

    function daftar_item(){
        $this->load->library('pagination');
        $query="select * from kategori_item";
        $config['base_url'] = base_url().'index.php/member/daftar_item/';
        $config['total_rows']= $this->db->query($query)->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 3;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $item['data'] = $this->mmbr_model->get_pagination($config['per_page'],$from);
        $this->load->view('daftar_item_member',$item);
    }
    function detail_barang(){
        $nama=$this->input->get('nama_item');
        print_r($nama);
        die();
    }

    function daftar_barang(){
        $this->load->library('pagination');
        $query="select * from barang";
        $config['base_url'] = base_url().'index.php/member/daftar_barang/';
        $config['total_rows']= $this->db->query($query)->num_rows();
        $config['per_page'] = 10;
        $config['num_links'] = 3;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $item['data'] = $this->mmbr_model->get_pag_barang($config['per_page'],$from);
        $this->load->view('daftar_barang_member',$item);
    }
}
