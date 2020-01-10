<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API - Tian Anugerah Mulyana
 * @author   : ian Anugerah Mulyana <tiananugerah14@gmail.com>
 * @since    : 2019
 * @license  : https://www.gthub.com/tiananugerah
 */
class Mapi extends CI_Model {

    /*Tampilan*/

    public function get_surat_masuk()
    {
        $query = $this->db->get("surat_masuk");
        return $query->result();
    }

    public function get_surat_keluar()
    {
        $query = $this->db->get("surat_keluar");
        return $query->result();
    }

    public function get_data_peserta()
    {
        $query = $this->db->get("data_peserta");
        return $query->result();
    }

    public function get_data_pegawai()
    {
        $query = $this->db->get("data_pegawai");
        return $query->result();
    }

    public function get_kegiatan()
    {
        $query = $this->db->get("kegiatan");
        return $query->result();
    }

    /*Tampil Join*/

    public function get_suratMasuk()
    {
        $this->db->join('kegiatan', 'surat_masuk.id_kegiatan = kegiatan.id_kegiatan');
        return $this->db->get('surat_masuk')->result();
    }

    public function get_suratKeluar()
    {
        $this->db->join('surat_keluar', 'surat_masuk.id_surat_masuk = surat_keluar.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = surat_keluar.nip');
        $this->db->join('data_peserta', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        return $this->db->get('surat_masuk')->result();
    }

    public function get_pesertaTdkTerima()
    {
        $this->db->where('data_peserta.keterangan', "tidak diterima");
        $this->db->join('surat_masuk', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = data_peserta.pembimbing');
        return $this->db->get('data_peserta')->result();
    }

    public function get_pesertaTerima()
    {
        $this->db->where('data_peserta.keterangan', "diterima");
        $this->db->join('surat_masuk', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = data_peserta.pembimbing');
        return $this->db->get('data_peserta')->result();
    }

    public function get_peserta()
    {
        $this->db->join('surat_masuk', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = data_peserta.pembimbing');
        return $this->db->get('data_peserta')->result();
    }

    public function get_peserta_nip($nip)
    {
        $this->db->where('data_peserta.pembimbing', $nip);
        $this->db->join('surat_masuk', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = data_peserta.pembimbing');
        return $this->db->get('data_peserta')->result();
    }

    public function get_peserta_surat($surat_masuk)
    {
        $this->db->where('data_peserta.id_surat_masuk', $surat_masuk);
        $this->db->join('surat_masuk', 'surat_masuk.id_surat_masuk = data_peserta.id_surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = data_peserta.pembimbing');
        $this->db->join('kegiatan', 'surat_masuk.id_kegiatan = kegiatan.id_kegiatan');
        return $this->db->get('data_peserta')->result();
    }

    /*Simpan*/

    public function insert($table, $data){   
        if($this->db->insert($table, $data)){
            return true;
        }else{
            return false;
        }
    }

    /*Update*/

    public function Update($data,$table,$where,$value){
        $this->db->where($where,$value);
        $this->db->update($table,$data);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    /*delete*/

    public function get_byid($table, $where, $data){

        $this->db->where($where, $data);
        return $this->db->get($table);
    }
        
    public function delete($table, $where, $data){

        $this->db->where($where, $data);
        return $this->db->delete($table);
    }

    /*Login*/

    public function cek($username, $password){

            $this->db->where('username', $username);
            $this->db->where('password', $password);
            return $this->db->get('user');
    }


}