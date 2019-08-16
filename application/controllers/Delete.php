<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Delete extends CI_Controller {

    function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('deleteData','updateData');
    }


    public function deleteSuratMasuk($id){

        $surat_masuk = $this->updateData->get_surat_masukbyid($id);
        $row = $surat_masuk->row();
        $img_before = $row->gambar;
        $path_img = './img/' . $img_before;
        unlink($path_img);

        $response = array();
        if (unlink($path_img)){
            $hapus_data = $this->deleteData->delete_surat_masukbyid($id);
        
            if ($hapus_data) {
                $response['pesan'] = "Data Berhasil di delete";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di delete";
                $response['hasil'] = true;
            }
            echo json_encode($response);
        
        } else{
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
            }
            echo json_encode($response);
        
        }
    }        
    

    public function deleteSuratKeluar($id){
        
    	$hapus_data = $this->deleteData->deleteSuratKeluar($id);
    
    	$response = array();
    	if ($hapus_data) {
    		$response['pesan'] = "Data Berhasil di delete";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di delete";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function deleteDataPeserta($nim_nis_ktp){
    
    	$hapus_data = $this->deleteData->deleteDataPeserta($nim_nis_ktp);
    
    	$response = array();
    	if ($hapus_data) {
    		$response['pesan'] = "Data Berhasil di delete";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di delete";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function deleteDataPegawai($nip){

        $hapus_data = $this->deleteData->deleteDataPegawai($nip);
        
    	$response = array();
    	if ($hapus_data) {
    		$response['pesan'] = "Data Berhasil di delete";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di delete";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }

    public function insertKegiatan($id_kegiatan){

    	$hapus_data = $this->setData->deleteKegiatan($id_kegiatan);
    
    	$response = array();
    	if ($hapus_data) {
    		$response['pesan'] = "Data Berhasil di delete";
    		$response['hasil'] = true;
     	} else {
    		$response['pesan'] = "Data Gagal di delete";
    		$response['hasil'] = false;
    	}
    	echo json_encode($response);
    }
}