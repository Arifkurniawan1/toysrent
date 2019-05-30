<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi extends CI_Model
{

    function get_data($no_ktp){
        $result = $this->db->query("select * from pengguna where no_ktp='$no_ktp'");
        return $result;
    }

    function get_adm($no_ktp){

        $result = $this->db->query("select * from admin where no_ktp='$no_ktp'");
        return $result;
    }

    function get_pengguna($nama){
        $result = $this->db->query("select * from pengguna where nama_lengkap='$nama'");
        return $result;
    }

    function get_member($no_ktp){
        $query="select a.no_ktp,a.nama_lengkap,a.email,a.tanggal_lahir,a.no_telp,b.poin,b.level,c.nama,c.jalan,c.nomor,c.kota,c.kodepos
			from pengguna a, anggota b, alamat c
			where a.no_ktp='$no_ktp' and a.no_ktp=b.no_ktp and b.no_ktp=c.no_ktp_anggota";
        $result=$this->db->query($query);
        return $result;
        }

}