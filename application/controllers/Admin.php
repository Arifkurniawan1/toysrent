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
//----------------------------------------------------------------------------------------------------------------
    //ITEM
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
        $item['data']=$this->adm_model->item_update($new_nama);
        $this->load->view('update_item',$item);
    }
    function edit_item(){
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
    //--------------------------------------------------------------------------------------------------------------------------------------
    //BARANG
    function daftar_barang(){
        $item['data']=$this->adm_model->get_barang();
        $this->load->view('daftar_barang_admin',$item);
    }
    function add_barang(){
        $item['anggota']=$this->adm_model->get_anggota();
        $this->load->view('penambahan_barang',$item);
    }

    function input_barang(){
        $id_barang=$this->input->post('id_barang');
        $nama_item=$this->input->post('nama_item');
        $data_item=$this->adm_model->valid_item(strtolower($nama_item));
        $data_barang=$this->adm_model->valid_barang($id_barang);
        ///print_r($data_item);
        //();
        if($data_item->num_rows()<1){
            echo $this->session->set_flashdata('msg','item not found, please create one before creating related goods');
			      redirect('admin/add_barang');
        }
        elseif ($data_barang->num_rows()>0) {
          echo $this->session->set_flashdata('msg','barang yang sama sudah ada');
          redirect('admin/add_barang');
        }
        else{
            $warna=$this->input->post('warna');
            $usia_dari=$this->input->post('usia_dari');
            $url_foto=$this->input->post('url_foto');
            $kondisi=$this->input->post('kondisi');
            $lama_penggunaan=$this->input->post('lama_penggunaan');
            $no_ktp_penyewa=$this->input->post('inlineFormCustomSelect');
            $bronze_royalty=$this->input->post('bronze_royalty');
            $bronze_sewa=$this->input->post('bronze_sewa');
            $silver_royalty=$this->input->post('silver_royalty');
            $silver_sewa=$this->input->post('silver_sewa');
            $gold_sewa=$this->input->post('gold_sewa');
            $gold_royalty=$this->input->post('gold_royalty');
            $sql="INSERT INTO barang values('$id_barang','$nama_item','$warna','$url_foto','$kondisi','$lama_penggunaan','$no_ktp_penyewa')";
            $this->db->query($sql);
            $this->db->query("INSERT INTO info_barang_level values ('$id_barang','BRONZE','$bronze_sewa','$bronze_royalty'), ('$id_barang','SILVER','$silver_sewa','$silver_royalty'), ('$id_barang','GOLD','$gold_sewa','$gold_royalty')");
            redirect('admin/daftar_barang');
        }
    }

    function update_barang($id){
        $new_id=urldecode($id);
        $item['data']=$this->adm_model->barang_update($new_id);
        $item['bronze']=$this->adm_model->barang_update_bronze($new_id);
        $item['silver']=$this->adm_model->barang_update_silver($new_id);
        $item['gold']=$this->adm_model->barang_update_gold($new_id);
        $this->load->view('update_barang',$item);
    }
    function edit_barang(){
        $id_barang=$this->input->post('id_barang');
        $nama_item=$this->input->post('nama');
        $warna=$this->input->post('warna');
        $url_foto=$this->input->post('url_foto');
        $kondisi=$this->input->post('kondisi');
        $lama_penggunaan=$this->input->post('lama_penggunaan');
        $bronze_royalty=$this->input->post('bronze_royalty');
        $bronze_sewa=$this->input->post('bronze_sewa');
        $silver_royalty=$this->input->post('silver_royalty');
        $silver_sewa=$this->input->post('silver_sewa');
        $gold_sewa=$this->input->post('gold_sewa');
        $gold_royalty=$this->input->post('gold_royalty');
        $this->db->query("update barang set nama_item='$nama_item',warna='$warna',url_foto='$url_foto',kondisi='$kondisi', lama_penggunaan='$lama_penggunaan' where id_barang='$id_barang'");
        $this->db->query("update info_barang_level set harga_sewa='$bronze_sewa', porsi_royalti='$bronze_royalty' where id_barang='$id_barang' and nama_level = 'BRONZE'");
        $this->db->query("update info_barang_level set harga_sewa='$silver_sewa', porsi_royalti='$silver_royalty' where id_barang='$id_barang' and nama_level = 'SILVER'");
        $this->db->query("update info_barang_level set harga_sewa='$gold_sewa', porsi_royalti='$gold_royalty' where id_barang='$id_barang' and nama_level = 'GOLD'");
        redirect('admin/daftar_barang');
    }
    function delete_barang($id){
        $new_id=urldecode($id);
        $this->db->query("Delete from barang where id_barang='$new_id'");
        redirect('admin/daftar_barang');
    }
}
