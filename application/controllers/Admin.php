<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('adm_model'); 
           
    }
    public function index(){
        $data['pemesanan']=$this->adm_model->get_pemesanan();
        $this->load->view('main_admin',$data);
    }
	
    function add_item(){
        $this->load->view('penambahan_item');
    }
    
    function input_item(){
        $nama=$this->input->post('nama');
        $data_item=$this->adm_model->valid_item(strtolower($nama));
        ///print_r($data_item);
        //();
        if($data_item->num_rows()>0){
            echo $this->session->set_flashdata('msg','item sudah ada');
			redirect('admin/add_item');
        }
        else{
            $deskripsi=$this->input->post('deskripsi');
            $usia_dari=$this->input->post('usia_dari');
            $usia_sampai=$this->input->post('usia_sampai');
            $bahan=$this->input->post('bahan');
            $kategori=$this->input->post('kategori');
            $sql="INSERT INTO item values('$nama','$deskripsi',$usia_dari,'$usia_sampai','$bahan')";
            $this->db->query($sql);
            $this->db->query("INSERT INTO kategori_item values ('$nama','$kategori')");
            redirect('admin/daftar_item');
        }
      
    
    }

    function daftar_item(){
        $item['data']=$this->adm_model->get_item();
        $this->load->view('daftar_item',$item);
    }

    function update_item($nama){
        //$nm=$this->input->post($nama);
        $new_nama=urldecode($nama);
        $item['data']=$this->adm_model->data_update($new_nama);
        $this->load->view('update_item',$item);
    }
    function edit_data(){
        $nama=$this->input->post('nama');
        $deskripsi=$this->input->post('deskripsi');
        $usia_dari=$this->input->post('usia_dari');
        $usia_sampai=$this->input->post('usia_sampai');
        $bahan=$this->input->post('bahan');
        $kategori=$this->input->post('kategori');
        $this->db->query("update item set deskripsi='$deskripsi',usia_dari='$usia_dari',usia_sampai='$usia_sampai',bahan='$bahan' where nama='$nama'");
        $this->db->query("update kategori_item set nama_kategori='$kategori' where nama_kategori='$nama'");
        redirect('admin/daftar_item');
    }

    function delete_item($nama){
        $new_nama=urldecode($nama);
        $this->db->query("Delete from item where nama='$new_nama'");
        redirect('admin/daftar_item');
    }

}