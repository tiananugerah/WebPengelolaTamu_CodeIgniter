<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Views extends CI_Controller {

    function __construct() {

        parent::__construct();
        //load model web
        $this->load->model('getData');
    }

    public function surat_masuk()
    {
        //get data dari model
        $surat_masuk = $this->getData->get_surat_masuk();
        //masukkan data kedalam variabel
        $data['surat_masuk'] = $surat_masuk;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($surat_masuk as $hasil)
        {
            $posts[] = array(
                "id_surat_masuk"        =>  $hasil->id_surat_masuk,
                "kop_surat"             =>  $hasil->kop_surat,
                "tgl_surat"             =>  $hasil->tgl_surat,
                "alamat"                =>  $hasil->alamat,
                "kota"                  =>  $hasil->kota,
                "kode_pos"              =>  $hasil->kode_pos,
                "id_kegiatan"           =>  $hasil->id_kegiatan,
                "tgl_msk_kegiatan"      =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"      =>  $hasil->tgl_klr_kegiatan,
                "gambar"                =>  $hasil->gambar
            );
        }
        $response['surat_masuk'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    }

    public function surat_keluar()
    {
        //get data dari model
        $surat_keluar = $this->getData->get_surat_keluar();
        //masukkan data kedalam variabel
        $data['surat_keluar'] = $surat_keluar;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($surat_keluar as $hasil)
        {
            $posts[] = array(
                "kop_surat"          =>  $hasil->kop_surat,
                "tgl_surat"          =>  $hasil->tgl_surat,
                "id_surat_masuk"     =>  $hasil->id_surat_masuk,
                "nip"                =>  $hasil->nip,
                "keterangan"         =>  $hasil->keterangan
            );
        }
        $response['surat_keluar'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    }

    public function data_peserta()
    {
        //get data dari model
        $data_peserta = $this->getData->get_data_peserta();
        //masukkan data kedalam variabel
        $data['data_peserta'] = $data_peserta;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($data_peserta as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"         =>  $hasil->nim_nis_ktp,
                "nama_peserta"        =>  $hasil->nama_peserta,
                "kelas_semester"      =>  $hasil->kelas_semester,
                "institusi_sekolah"   =>  $hasil->institusi_sekolah,
                "jurusan"             =>  $hasil->jurusan,
                "keterangan"          =>  $hasil->keterangan,
                "id_surat_masuk"      =>  $hasil->id_surat_masuk
            );
        }
        $response['data_peserta'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    }

    public function data_pegawai()
    {
        //get data dari model
        $data_pegawai = $this->getData->get_data_pegawai();
        //masukkan data kedalam variabel
        $data['data_pegawai'] = $data_pegawai;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($data_pegawai as $hasil)
        {
            $posts[] = array(
                "nip"                       =>  $hasil->nip,
                "nip_lama"                  =>  $hasil->nip_lama,
                "nama_pegawai"              =>  $hasil->nama_pegawai,
                "bagian"                    =>  $hasil->bagian,
                "gol"                       =>  $hasil->gol,
                "lulusan"                   =>  $hasil->lulusan,
                "sekolah_kampus"            =>  $hasil->sekolah_kampus,
                "jabatan_fungsional"        =>  $hasil->jabatan_fungsional,
                "status"                    =>  $hasil->status
            );
        }
        $response['data_pegawai'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    }


    public function kegiatan()
    {
        //get data dari model
        $kegiatan = $this->getData->get_kegiatan();
        //masukkan data kedalam variabel
        $data['kegiatan'] = $kegiatan;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($kegiatan as $hasil)
        {
            $posts[] = array(
                "id_kegiatan"           =>  $hasil->id_kegiatan,
                "nama_kegiatan"         =>  $hasil->nama_kegiatan
            );
        }
        $response['kegiatan'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    }

    public function suratMasuk()
    {
        //get data dari model
        $suratMasuk = $this->getData->get_suratMasuk();
        //masukkan data kedalam variabel
        $data['suratMasuk'] = $suratMasuk;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($suratMasuk as $hasil)
        {
            $posts[] = array(
                "kop_surat"                 =>  $hasil->kop_surat,
                "tgl_surat"                 =>  $hasil->tgl_surat,
                "alamat"                    =>  $hasil->alamat,
                "kota"                      =>  $hasil->kota,
                "kode_pos"                  =>  $hasil->kode_pos,
                "nama_kegiatan"             =>  $hasil->nama_kegiatan,
                "tgl_msk_kegiatan"          =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"          =>  $hasil->tgl_klr_kegiatan
            );
        }
        $response['suratMasuk'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    }  
    
    public function suratKeluar()
    {
        //get data dari model
        $suratKeluar = $this->getData->get_suratKeluar();
        //masukkan data kedalam variabel
        $data['suratKeluar'] = $suratKeluar;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($suratKeluar as $hasil)
        {
            $posts[] = array(
                "kop_surat"                 =>  $hasil->kop_surat,
                "tgl_surat"                 =>  $hasil->tgl_surat,
                "kop_surat"                 =>  $hasil->kop_surat,
                "nama_pegawai"              =>  $hasil->nama_pegawai,
                "keterangan"                =>  $hasil->keterangan
            );
        }
        $response['suratKeluar'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    } 

    public function pesertaTdkTerima()
    {
        //get data dari model
        $pesertaTdkTerima = $this->getData->get_pesertaTdkTerima();
        //masukkan data kedalam variabel
        $data['pesertaTdkTerima'] = $pesertaTdkTerima;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($pesertaTdkTerima as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"               =>  $hasil->nim_nis_ktp,
                "nama_peserta"              =>  $hasil->nama_peserta,
                "kelas_semester"            =>  $hasil->kelas_semester,
                "institusi_sekolah"         =>  $hasil->institusi_sekolah,
                "keterangan"                =>  $hasil->keterangan,
                "tgl_msk_kegiatan"          =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"          =>  $hasil->tgl_klr_kegiatan
            );
        }
        $response['pesertaTdkTerima'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    } 



    public function pesertaTerima()
    {
        //get data dari model
        $pesertaTerima = $this->getData->get_pesertaTerima();
        //masukkan data kedalam variabel
        $data['pesertaTerima'] = $pesertaTerima;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($pesertaTerima as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"               =>  $hasil->nim_nis_ktp,
                "nama_peserta"              =>  $hasil->nama_peserta,
                "kelas_semester"            =>  $hasil->kelas_semester,
                "institusi_sekolah"         =>  $hasil->institusi_sekolah,
                "keterangan"                =>  $hasil->keterangan,
                "tgl_msk_kegiatan"          =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"          =>  $hasil->tgl_klr_kegiatan
            );
        }
        $response['pesertaTerima'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    } 

    public function peserta()
    {
        //get data dari model
        $peserta = $this->getData->get_peserta();
        //masukkan data kedalam variabel
        $data['peserta'] = $peserta;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($peserta as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"               =>  $hasil->nim_nis_ktp,
                "nama_peserta"              =>  $hasil->nama_peserta,
                "kelas_semester"            =>  $hasil->kelas_semester,
                "institusi_sekolah"         =>  $hasil->institusi_sekolah,
                "keterangan"                =>  $hasil->keterangan,
                "tgl_msk_kegiatan"          =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"          =>  $hasil->tgl_klr_kegiatan
            );
        }
        $response['peserta'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);


    } 
}