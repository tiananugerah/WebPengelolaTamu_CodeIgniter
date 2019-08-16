<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API - Tian Anugerah Mulyana
 * @author   : ian Anugerah Mulyana <tiananugerah14@gmail.com>
 * @since    : 2019
 * @license  : https://www.gthub.com/tiananugerah
 */
class getData extends CI_Model {

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

    public function get_suratMasuk()
    {
        $query = $this->db->query('SELECT a.kop_surat , a.tgl_surat , a.alamat , a.kota , a.kode_pos, b.nama_kegiatan , a.tgl_msk_kegiatan , a.tgl_klr_kegiatan FROM surat_masuk a , kegiatan b WHERE a.id_kegiatan = b.id_kegiatan;');
        return $query->result();
    }

    public function get_suratKeluar()
    {
        $query = $this->db->query('SELECT a.kop_surat , a.tgl_surat , b.kop_surat , c.nama_pegawai , a.keterangan FROM surat_masuk a, surat_keluar b, data_pegawai c WHERE a.id_surat_masuk = b.id_surat_masuk and a.nip = c.nip;');
        return $query->result();
    }

    public function get_pesertaTdkTerima()
    {
        $query = $this->db->query('SELECT  a.nim_nis_ktp , a.nama_peserta , a.kelas_semester , a.institusi_sekolah , a.keterangan , b.tgl_msk_kegiatan , b.tgl_klr_kegiatan from data_peserta a , surat_masuk b where keterangan="tidak" and a.id_surat_masuk = b.id_surat_masuk;');
        return $query->result();
    }

    public function get_pesertaTerima()
    {
        $query = $this->db->query('SELECT a.nim_nis_ktp , a.nama_peserta , a.kelas_semester , a.institusi_sekolah , a.keterangan , b.tgl_msk_kegiatan , b.tgl_klr_kegiatan from data_peserta a , surat_masuk b where keterangan="diterima" and a.id_surat_masuk = b.id_surat_masuk;');
        return $query->result();
    }

    public function get_peserta()
    {
        $query = $this->db->query('SELECT a.nim_nis_ktp , a.nama_peserta , a.kelas_semester , a.institusi_sekolah , a.keterangan , b.tgl_msk_kegiatan , b.tgl_klr_kegiatan from data_peserta a , surat_masuk b where a.id_surat_masuk = b.id_surat_masuk;
');
        return $query->result();
    }

}