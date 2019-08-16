<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Update extends CI_Controller {

    function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('updateData');
    }


    public function updateSuratMasuk($id){


        $response = array();
    	$config['upload_path']    = './img/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']       = '5000';

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

            $surat_masuk = $this->updateData->get_surat_masukbyid($id);
            $row = $surat_masuk->row();
            $img_before = $row->gambar;
            $path_img = './img/' . $img_before;
            unlink($path_img);

            $Update_data = $this->updateData->updateSuratMasuk($kop_surat, $tgl_surat, $alamat, $kota, $kode_pos, $id_kegiatan, $tgl_msk_kegiatan, $tgl_klr_kegiatan, $gambar, $id);
        
            if ($Update_data) {
                $response['pesan'] = "Data Berhasil di Update";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di Update";
                $response['hasil'] = false;
            }
            echo json_encode($response);
        
        }
        
    }

    public function updateSuratKeluar($id){
        date_default_timezone_set('Asia/Jakarta');

    	$kop_surat 			= $this->input->post('kop_surat');
    	$tgl_surat 			= date('y-m-d');
    	$id_surat_masuk 	= $this->input->post('id_surat_masuk');
    	$nip 				= $this->input->post('nip');
    	$keterangan			= $this->input->post('keterangan');


        $surat_masuk = $this->updateData->get_surat_keluarbyid($id);
        $row = $surat_masuk->row();

    	$Update_data = $this->updateData->updateSuratKeluar($kop_surat, $tgl_surat, $id_surat_masuk, $nip, $keterangan ,$id);
    
    	$response = array();
    	if ($Update_data) {
    		$response['pesan'] = "Data Berhasil d   mi Update";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Update";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function updateDataPeserta($nim_nis_ktp){

    	$nim_nis_ktp 			= $this->input->post('nim_nis_ktp');
    	$nama_peserta 			= $this->input->post('nama_peserta');
    	$kelas_semester 		= $this->input->post('kelas_semester');
    	$institusi_sekolahan 	= $this->input->post('institusi_sekolahan');
    	$jurusan 			    = $this->input->post('jurusan');
    	$keterangan 		    = $this->input->post('keterangan');
    	$id_surat_masuk	        = $this->input->post('id_surat_masuk');

        $data_peserta = $this->updateData->get_data_pesertabyid($nim_nis_ktp);
        $row = $data_peserta->row();
    
    	$Update_data = $this->updateData->updateDataPeserta($nim_nis_ktp, $nama_peserta, $kelas_semester, $institusi_sekolahan, $jurusan, $keterangan, $id_surat_masuk);
    
    	$response = array();
    	if ($Update_data) {
    		$response['pesan'] = "Data Berhasil di Update";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Update";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function updateDataPegawai($nip){

        $nip                    = $this->input->post('nip');
        $nip_lama               = $this->input->post('nip_lama');
        $nama_pegawai           = $this->input->post('nama_pegawai');
        $bagian                 = $this->input->post('bagian');
        $gol                    = $this->input->post('gol');
        $lulusan                = $this->input->post('lulusan');
        $sekolah_kampus         = $this->input->post('sekolah_kampus');
        $jabatan_fungsional     = $this->input->post('jabatan_fungsional');
        $status                 = $this->input->post('status');

        $data_pegawai = $this->updateData->get_data_pegawaibyid($nip);
        $row = $data_pegawai->row();

        $Update_data = $this->updateData->updateDataPegawai($nip, $nip_lama, $nama_pegawai, $bagian, $gol, $lulusan, $sekolah_kampus, $jabatan_fungsional, $status);
        
    	$response = array();
    	if ($Update_data) {
    		$response['pesan'] = "Data Berhasil di Update";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Update";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function insertKegiatan($id_kegiatan){

    	$nama_kegiatan 		= $this->input->post('nama_kegiatan');
    
        $kegiatan = $this->updateData->get_kegiatanbyid($id_kegiatan);
        $row = $kegiatan->row();

    	$Update_data = $this->setData->updateKegiatan($id_kegiatan, $nama_kegiatan);
    
    	$response = array();
    	if ($Update_data) {
    		$response['pesan'] = "Data Berhasil di Update";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di Update";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }
}