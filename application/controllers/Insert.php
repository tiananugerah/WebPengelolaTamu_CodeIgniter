<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Insert extends CI_Controller {

    function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('setData');
    }


    public function insertSuratMasuk(){


        $response = array();
    	$config['upload_path']   = './img/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']      = '1000';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

            $response['pesan'] = 'Gagal Menyimpan Gambar'. $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response); 
        
        } else {

        
            $data_upload        = $this->upload->data();
            $nama_gambar        = $data_upload['file_name'];


            $kop_surat          = $this->input->post('kop_surat');
            $tgl_surat          = $this->input->post('tgl_surat');
            $alamat             = $this->input->post('alamat');
            $kota               = $this->input->post('kota');
            $kode_pos           = $this->input->post('kode_pos');
            $id_kegiatan        = $this->input->post('id_kegiatan');
            $tgl_msk_kegiatan   = $this->input->post('tgl_msk_kegiatan');
            $tgl_klr_kegiatan   = $this->input->post('tgl_klr_kegiatan');
            $gambar             = $nama_gambar;


            $simpan_data = $this->setData->insertSuratMasuk($kop_surat, $tgl_surat, $alamat, $kota, $kode_pos, $id_kegiatan, $tgl_msk_kegiatan, $tgl_klr_kegiatan, $gambar);
        
            if ($simpan_data) {
                $response['pesan'] = "Data Berhasil di Simpan";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di Simpan";
                $response['hasil'] = false;
            }
            echo json_encode($response);
        
        }
        
    }

    public function insertSuratKeluar(){
        date_default_timezone_set('Asia/Jakarta');

    	$kop_surat 			= $this->input->post('kop_surat');
    	$tgl_surat 			= date('y-m-d');
    	$id_surat_masuk 	= $this->input->post('id_surat_masuk');
    	$nip 				= $this->input->post('nip');
    	$keterangan			= $this->input->post('keterangan');
    
    	$simpan_data = $this->setData->insertSuratKeluar($kop_surat, $tgl_surat, $id_surat_masuk, $nip, $keterangan);
    
    	$response = array();
    	if ($simpan_data) {
    		$response['pesan'] = "Data Berhasil d   mi Simpan";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Simpan";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function insertDataPeserta(){

    	$nim_nis_ktp 			= $this->input->post('nim_nis_ktp');
    	$nama_peserta 			= $this->input->post('nama_peserta');
    	$kelas_semester 		= $this->input->post('kelas_semester');
    	$institusi_sekolahan 	= $this->input->post('institusi_sekolahan');
    	$jurusan 			    = $this->input->post('jurusan');
    	$keterangan 		    = $this->input->post('keterangan');
    	$id_surat_masuk	        = $this->input->post('id_surat_masuk');
    
    	$simpan_data = $this->setData->insertDataPeserta($nim_nis_ktp, $nama_peserta, $kelas_semester, $institusi_sekolahan, $jurusan, $keterangan, $id_surat_masuk);
    
    	$response = array();
    	if ($simpan_data) {
    		$response['pesan'] = "Data Berhasil di Simpan";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Simpan";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function insertDataPegawai(){

    	$nip 			        = $this->input->post('nip');
    	$nip_lama 			    = $this->input->post('nip_lama');
    	$nama_pegawai 			= $this->input->post('nama_pegawai');
    	$bagian 				= $this->input->post('bagian');
    	$gol 			        = $this->input->post('gol');
    	$lulusan 		        = $this->input->post('lulusan');
    	$sekolah_kampus         = $this->input->post('sekolah_kampus');
    	$jabatan_fungsional 	= $this->input->post('jabatan_fungsional');
        $status                 = $this->input->post('status');
    
    	$simpan_data = $this->setData->insertDataPegawai($nip, $nip_lama, $nama_pegawai, $bagian, $gol, $lulusan, $sekolah_kampus, $jabatan_fungsional, $status);
    
    	$response = array();
    	if ($simpan_data) {
    		$response['pesan'] = "Data Berhasil di Simpan";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Simpan";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function insertKegiatan(){

    	$id_kegiatan 	    = $this->input->post('id_kegiatan');
    	$nama_kegiatan 		= $this->input->post('nama_kegiatan');
    
    	$simpan_data = $this->setData->insertKegiatan($id_kegiatan, $nama_kegiatan);
    
    	$response = array();
    	if ($simpan_data) {
    		$response['pesan'] = "Data Berhasil di Simpan";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Simpan";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }
}