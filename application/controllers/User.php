<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('validasi');
	}

	public function index()
	{
		$this->load->view('main');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function reg_adm()
	{
		$this->load->view('registrasi_admin');
	}

	public function reg_member()
	{
		$this->load->view('registrasi_member');
	}

	public function validate(){
		$no_ktp=$this->input->get('no_ktp');
		$rst_validasi=$this->validasi->get_data($no_ktp);
		if($rst_validasi->num_rows()>0){
			$data=$rst_validasi->row_array();
			$no_ktp=$data['no_ktp'];
			$email=$data['email'];
			$nama=$data['nama_lengkap'];
			$adm_valid=$this->validasi->get_adm($no_ktp);
			if($adm_valid->num_rows()>0){
					$this->session->set_userdata('nama',$nama);
					redirect('admin');

			}
			$this->session->set_userdata('nama',$nama);
			redirect('member');
			
		}
		else{
			echo $this->session->set_flashdata('msg','User atau Password Belum Terdaftar');
			redirect('user/login');
		}
	}

	public function input_adm(){
		$no_ktp=$this->input->post('no_ktp');
		$data_adm=$this->validasi->get_data($no_ktp)->num_rows();
		if($data_adm>0){
			echo $this->session->set_flashdata('msg','user anda sudah terdaftar, silahkan menggunakan user lain');
			redirect('user/reg_adm');
		}
		else{
		$nama_lengkap=$this->input->post('nama_lengkap');
		$email=$this->input->post('email');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$no_telp=$this->input->post('no_telp');
		$sql="INSERT INTO pengguna values ('$no_ktp','$nama_lengkap','$email','$tanggal_lahir','$no_telp')";
		$this->db->query($sql);
		$this->db->query("INSERT INTO admin values('$no_ktp')");
		echo $this->session->set_userdata('nama', $nama_lengkap );
			redirect('role/admin');
		}
	}

	public function input_mmbr(){
		$no_ktp=$this->input->post('no_ktp');
		$data_mmbr=$this->validasi->get_data($no_ktp);
		if($data_mmbr->num_rows()>0){
			echo $this->session->set_flashdata('msg','user anda sudah terdaftar, silahkan mendaftarkan dengan user lain');
			redirect('user/reg_member');
		}
		else{
		$nama_lengkap=$this->input->post('nama_lengkap');
		$email=$this->input->post('email');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$no_telp=$this->input->post('no_telp');
		$in_mmbr="INSERT INTO pengguna values('$no_ktp','$nama_lengkap','$email','$tanggal_lahir','$no_telp')";
		$this->db->query($in_mmbr);
		$this->db->query("INSERT INTO anggota values ('$no_ktp',0,'BRONZE')");
		
		$jalan=$this->input->post('jalan');
		$nomor=$this->input->post('nomor');
		$kota=$this->input->post('kota');
		$kodepos=$this->input->post('kodepos');
		$in_addrs="INSERT INTO alamat values('$no_ktp','$nama_lengkap','$jalan','$nomor','$kota','$kodepos')";
		$this->db->query($in_addrs);
		
		
		echo $this->session->set_userdata('nama', $nama_lengkap );
			redirect('role/member');
		}
	}

	function get_profile(){
		$nama=$this->input->get('nama_user');
		$user=$this->validasi->get_pengguna($nama)->row_array();
		$admin=$this->validasi->get_adm($user['no_ktp']);
		if($admin->num_rows()>0){
			$data['user']=$this->validasi->get_pengguna($nama);
			$this->load->view('profil_admin',$data);
		}else{
			$data['user']=$this->validasi->get_member($user['no_ktp']);
			$this->load->view('profil_member',$data);
		}
	}
}
