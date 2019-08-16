<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API - Tian Anugerah Mulyana
 * @author   : ian Anugerah Mulyana <tiananugerah14@gmail.com>
 * @since    : 2019
 * @license  : https://www.gthub.com/tiananugerah
 */
class deleteData extends CI_Model{

    public function delete_surat_masukbyid($id){

    $this->db->where('id_surat_masuk',$id);
    return $this->db->delete('surat_masuk');

    }


    public function delete_surat_keluarbyid($id){

    $this->db->where('kop_surat',$id);
    return $this->db->delete('surat_keluar');

    }


    public function delete_data_pesertabyid($nim_nis_ktp){

    $this->db->where('nim_nis_ktp',$nim_nis_ktp);
    return $this->db->delete('data_peserta');

    }


    public function delete_data_pegawaibyid($nip){

    $this->db->where('nip',$nip);
    return $this->db->delete('data_pegawai');
    }

    
    public function delete_kegiatanbyid($id_kegiatan){

    $this->db->where('id_kegiatan',$id_kegiatan);
    return $this->db->delete('kegiatan');
    }

}