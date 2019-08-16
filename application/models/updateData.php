<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : API - Tian Anugerah Mulyana
 * @author   : ian Anugerah Mulyana <tiananugerah14@gmail.com>
 * @since    : 2019
 * @license  : https://www.gthub.com/tiananugerah
 */
class updateData extends CI_Model{

  public function get_surat_masukbyid($id){

    $this->db->where('id_surat_masuk',$id);
    return $this->db->get('surat_masuk');

  }


  public function updateSuratMasuk($kop_surat, $tgl_surat, $alamat, $kota, $kode_pos, $id_kegiatan, $tgl_msk_kegiatan, $tgl_klr_kegiatan, $gambar,$id){

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

        $this->db->where('id_surat_masuk',$id);
    	return $this->db->update('surat_masuk',$data);

    }


    public function get_surat_keluarbyid($id){

    $this->db->where('kop_surat',$id);
    return $this->db->get('surat_keluar');

    }


    public function updateSuratKeluar($kop_surat, $tgl_surat, $id_surat_masuk, $nip, $keterangan, $id){

  		$data = array();

    	$data['kop_surat']			=$kop_surat; 
    	$data['tgl_surat']			=$tgl_surat; 
    	$data['id_surat_masuk']		=$id_surat_masuk;
    	$data['nip']				=$nip; 
    	$data['keterangan']			=$keterangan;

        $this->db->where('id',$id);   
    	return $this->db->update('surat_keluar',$data);
    }


    public function get_data_pesertabyid($nim_nis_ktp){

    $this->db->where('nim_nis_ktp',$nim_nis_ktp);
    return $this->db->get('data_peserta');

    }


    public function updateDataPeserta($nim_nis_ktp, $nama_peserta, $kelas_semester, $institusi_sekolahan, $jurusan, $keterangan, $id_surat_masuk){

        $data = array();

        $data['nim_nis_ktp']          =$nim_nis_ktp; 
        $data['nama_peserta']         =$nama_peserta; 
        $data['kelas_semester']       =$kelas_semester;
        $data['institusi_sekolahan']  =$institusi_sekolahan; 
        $data['jurusan']              =$jurusan;
        $data['keterangan']           =$keterangan;
        $data['id_surat_masuk']       =$id_surat_masuk;
   

        $this->db->where('nim_nis_ktp',$nim_nis_ktp);
        return $this->db->insert('data_peserta',$data);
    }


    public function get_data_pegawaibyid($nip){

    $this->db->where('nip',$nip);
    return $this->db->get('data_pegawai');
    }

    public function updateDataPegawai($nip, $nip_lama, $nama_pegawai, $bagian, $gol, $lulusan, $sekolah_kampus, $jabatan_fungsional, $status){


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


        $this->db->where('nip',$nip);
   
        return $this->db->insert('data_pegawai',$data);
        $data = array();
    }



    public function get_kegiatanbyid($id_kegiatan){

    $this->db->where('id_kegiatan',$id_kegiatan);
    return $this->db->get('kegiatan');
    }


    public function updateKegiatan($id_kegiatan, $nama_kegiatan){

        $data = array();

        $data['id_kegiatan']          =$id_kegiatan; 
        $data['nama_kegiatan']        =$nama_kegiatan;
   
        return $this->db->insert('kegiatan',$data);
    }
}