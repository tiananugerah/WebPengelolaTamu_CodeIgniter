<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API - Tian Anugerah Mulyana
 * @author   : ian Anugerah Mulyana <tiananugerah14@gmail.com>
 * @since    : 2019
 * @license  : https://www.gthub.com/tiananugerah
 */
class setData extends CI_Model{

  public function insertSuratMasuk($kop_surat, $tgl_surat, $alamat, $kota, $kode_pos, $id_kegiatan, $tgl_msk_kegiatan, $tgl_klr_kegiatan, $gambar){

  		$data = array();

    	$data['kop_surat']			=$kop_surat; 
    	$data['tgl_surat']			=$tgl_surat; 
    	$data['alamat']				=$alamat;
    	$data['kota']				=$kota; 
    	$data['kode_pos']			=$kode_pos;
    	$data['id_kegiatan']		=$id_kegiatan;
    	$data['tgl_msk_kegiatan']	=$tgl_msk_kegiatan;
    	$data['tgl_klr_kegiatan']	=$tgl_klr_kegiatan;
        $data['gambar']             =$gambar;
   
    	return $this->db->insert('surat_masuk',$data);
    }

    public function insertSuratKeluar($kop_surat, $tgl_surat, $id_surat_masuk, $nip, $keterangan){

  		$data = array();

    	$data['kop_surat']			=$kop_surat; 
    	$data['tgl_surat']			=$tgl_surat; 
    	$data['id_surat_masuk']		=$id_surat_masuk;
    	$data['nip']				=$nip; 
    	$data['keterangan']			=$keterangan;
   
    	return $this->db->insert('surat_keluar',$data);
    }

    public function insertDataPeserta($nim_nis_ktp, $nama_peserta, $kelas_semester, $institusi_sekolahan, $jurusan, $keterangan, $id_surat_masuk){

        $data['nim_nis_ktp']          =$nim_nis_ktp; 
        $data['nama_peserta']         =$nama_peserta; 
        $data['kelas_semester']       =$kelas_semester;
        $data['institusi_sekolahan']  =$institusi_sekolahan; 
        $data['jurusan']              =$jurusan;
        $data['keterangan']           =$keterangan;
        $data['id_surat_masuk']       =$id_surat_masuk;
   
        return $this->db->insert('data_peserta',$data);
    }

     public function insertDataPegawai($nip, $nip_lama, $nama_pegawai, $bagian, $gol, $lulusan, $sekolah_kampus, $jabatan_fungsional, $status){


        $data = array();

        $data['nip']                  =$nip; 
        $data['nip_lama']             =$nip_lama; 
        $data['nama_pegawai']         =$nama_pegawai;
        $data['bagian']               =$bagian; 
        $data['gol']                  =$gol;
        $data['lulusan']              =$lulusan;
        $data['sekolah_kampus']       =$sekolah_kampus;
        $data['jabatan_fungsional']   =$jabatan_fungsional;
        $data['status']               =$status;
   
        return $this->db->insert('data_pegawai',$data);
        $data = array();

    }

    public function insertKegiatan($id_kegiatan, $nama_kegiatan){

        $data = array();

        $data['id_kegiatan']          =$id_kegiatan; 
        $data['nama_kegiatan']        =$nama_kegiatan;
   
        return $this->db->insert('kegiatan',$data);
    }
}