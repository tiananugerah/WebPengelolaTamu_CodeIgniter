<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends CI_Controller {

    public function surat_masuk()
    {
        //get data dari model
        $surat_masuk = $this->Mapi->get_surat_masuk();
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
        $surat_keluar = $this->Mapi->get_surat_keluar();
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
                "nip"                =>  $hasil->nip
            );
        }
        $response['surat_keluar'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    }

    public function data_peserta()
    {
        //get data dari model
        $data_peserta = $this->Mapi->get_data_peserta(); 
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
                "pembimbing"          =>  $hasil->pembimbing,
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
        $data_pegawai = $this->Mapi->get_data_pegawai();
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
        $kegiatan = $this->Mapi->get_kegiatan();
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

    /*tampil Join*/

    public function suratMasuk()
    {
        //get data dari model
        $suratMasuk = $this->Mapi->get_suratMasuk();
        //masukkan data kedalam variabel
        $data['suratMasuk'] = $suratMasuk;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($suratMasuk as $hasil)
        {
            $posts[] = array(
                "id_surat_masuk"            =>  $hasil->id_surat_masuk,
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
        $suratKeluar = $this->Mapi->get_suratKeluar();
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
                "keterangan"                =>  $hasil->keterangan,
                "nama_peserta"              =>  $hasil->nama_peserta,
                "nim_nis_ktp"               =>  $hasil->nim_nis_ktp
            );
        }
        $response['suratKeluar'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    } 

    public function pesertaTdkTerima()
    {
        //get data dari model
        $pesertaTdkTerima = $this->Mapi->get_pesertaTdkTerima();
        //masukkan data kedalam variabel
        $data['pesertaTdkTerima'] = $pesertaTdkTerima;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($pesertaTdkTerima as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"         =>  $hasil->nim_nis_ktp,
                "nama_peserta"        =>  $hasil->nama_peserta,
                "kelas_semester"      =>  $hasil->kelas_semester,
                "institusi_sekolah"   =>  $hasil->institusi_sekolah,
                "jurusan"             =>  $hasil->jurusan,
                "keterangan"          =>  $hasil->keterangan,
                "tgl_msk_kegiatan"    =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"    =>  $hasil->tgl_klr_kegiatan,
                "nama_pegawai"        =>  $hasil->nama_pegawai
            );
        }
        $response['pesertaTdkTerima'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    } 

    public function pesertaTerima()
    {
        //get data dari model
        $pesertaTerima = $this->Mapi->get_pesertaTerima();
        //masukkan data kedalam variabel
        $data['pesertaTerima'] = $pesertaTerima;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($pesertaTerima as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"         =>  $hasil->nim_nis_ktp,
                "nama_peserta"        =>  $hasil->nama_peserta,
                "kelas_semester"      =>  $hasil->kelas_semester,
                "institusi_sekolah"   =>  $hasil->institusi_sekolah,
                "jurusan"             =>  $hasil->jurusan,
                "keterangan"          =>  $hasil->keterangan,
                "tgl_msk_kegiatan"    =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"    =>  $hasil->tgl_klr_kegiatan,
                "nama_pegawai"        =>  $hasil->nama_pegawai
            );
        }
        $response['pesertaTerima'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    } 

    public function peserta()
    {
        //get data dari model
        $peserta = $this->Mapi->get_peserta();
        //masukkan data kedalam variabel
        $data['peserta'] = $peserta;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($peserta as $hasil)
        {
            $posts[] = array(
                "nim_nis_ktp"         =>  $hasil->nim_nis_ktp,
                "nama_peserta"        =>  $hasil->nama_peserta,
                "kelas_semester"      =>  $hasil->kelas_semester,
                "institusi_sekolah"   =>  $hasil->institusi_sekolah,
                "jurusan"             =>  $hasil->jurusan,
                "keterangan"          =>  $hasil->keterangan,
                "tgl_msk_kegiatan"    =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"    =>  $hasil->tgl_klr_kegiatan,
                "nama_pegawai"        =>  $hasil->nama_pegawai
            );
        }
        $response['peserta'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    }

    public function peserta_surat($id)
    {
        //get data dari model
        $data_peserta = $this->Mapi->get_peserta_surat($id);
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
                "nama_kegiatan"       =>  $hasil->nama_kegiatan,
                "tgl_msk_kegiatan"    =>  $hasil->tgl_msk_kegiatan,
                "tgl_klr_kegiatan"    =>  $hasil->tgl_klr_kegiatan,
                "nama_pegawai"        =>  $hasil->nama_pegawai
            );
        }
        $response['data_peserta'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    }

    public function peserta_nip($id)
    {
        //get data dari model
        $data_peserta = $this->Mapi->get_peserta_nip($id);
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
                "pembimbing"          =>  $hasil->pembimbing,
                "id_surat_masuk"      =>  $hasil->id_surat_masuk
            );
        }
        $response['data_peserta'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);
    }

        /*Simpan*/

    public function insertSuratMasuk(){

        $response = array();
        $config['upload_path']   = './img/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']      = '1000';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

            $response['pesan'] = 'Gagal Menyimpan Gambar'. $this->upload->display_errors();
            $response['hasil'] = false;
            
        
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
            $alert              = $this->input->post('alert');
            $gambar             = $nama_gambar;

            $data=array(
                'kop_surat'         => $kop_surat,
                'tgl_surat'         => $tgl_surat,
                'alamat'            => $alamat,
                'kota'              => $kota,
                'kode_pos'          => $kode_pos,
                'id_kegiatan'       => $id_kegiatan,
                'tgl_msk_kegiatan'  => $tgl_msk_kegiatan,
                'tgl_klr_kegiatan'  => $tgl_klr_kegiatan,
                'gambar'            => $gambar
                );  

            $simpan_data = $this->Mapi->insert('surat_masuk', $data);
        
            $response = array();
            if ($simpan_data) {
                $response['pesan'] = "Data Berhasil di Simpan";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di Simpan";
                $response['hasil'] = false;
            }
            
            if ($simpan_data) {
                echo    "<script type='text/javascript'>
                        alert('",$response['pesan'],"'); 
                        document.location='",site_url($alert),"' 
                        </script>";
            } else {
                echo    "<script type='text/javascript'>
                        alert('",$response['pesan'],"');  
                        document.location='",site_url($alert),"' 
                        </script>";
            }         
        
        }
        
    }

    public function insertSuratKeluar(){

        date_default_timezone_set('Asia/Jakarta');

        $kop_surat          = $this->input->post('kop_surat');
        $tgl_surat          = date('y-m-d');
        $id_surat_masuk     = $this->input->post('id_surat_masuk');
        $nip                = $this->input->post('nip');
        $alert              = $this->input->post('alert');
    
        $data = array(
            'kop_surat'         => $kop_surat ,
            'tgl_surat'         => $tgl_surat ,
            'id_surat_masuk'    => $id_surat_masuk,
            'nip'               => $nip
        );

        $simpan_data = $this->Mapi->insert('data_peserta', $data);
    
        $response = array();
        if ($simpan_data) {
            $response['pesan'] = "Data Berhasil di Simpan";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Simpan";
            $response['hasil'] = false;
        }
        
        if ($simpan_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function insertDataPeserta(){

        $nim_nis_ktp            = $this->input->post('nim_nis_ktp');
        $nama_peserta           = $this->input->post('nama_peserta');
        $kelas_semester         = $this->input->post('kelas_semester');
        $institusi_sekolah      = $this->input->post('institusi_sekolah');
        $jurusan                = $this->input->post('jurusan');
        $keterangan             = $this->input->post('keterangan');
        $pembimbing             = $this->input->post('pembimbing');
        $id_surat_masuk         = $this->input->post('id_surat_masuk');
        $alert                  = $this->input->post('alert');
    
        $data = array(
            'nim_nis_ktp'           => $nim_nis_ktp ,
            'nama_peserta'          => $nama_peserta ,
            'kelas_semester'        => $kelas_semester ,
            'institusi_sekolah'     => $institusi_sekolah ,
            'jurusan'               => $jurusan ,
            'keterangan'            => $keterangan ,
            'pembimbing'            => $pembimbing ,
            'id_surat_masuk'        => $id_surat_masuk 
        );

        $simpan_data = $this->Mapi->insert('data_peserta', $data);
    
        $response = array();
        if ($simpan_data) {
            $response['pesan'] = "Data Berhasil di Simpan";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Simpan";
            $response['hasil'] = false;
        }
        
        if ($simpan_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function insertDataPegawai(){

        $nip                    = $this->input->post('nip');
        $nip_lama               = $this->input->post('nip_lama');
        $nama_pegawai           = $this->input->post('nama_pegawai');
        $bagian                 = $this->input->post('bagian');
        $gol                    = $this->input->post('gol');
        $lulusan                = $this->input->post('lulusan');
        $sekolah_kampus         = $this->input->post('sekolah_kampus');
        $jabatan_fungsional     = $this->input->post('jabatan_fungsional');
        $status                 = $this->input->post('status');
        $alert                  = $this->input->post('alert');

        
        $data = array(
            'nip'                   => $nip ,
            'nip_lama'              => $nip_lama ,
            'nama_pegawai'          => $nama_pegawai ,
            'bagian'                => $bagian ,
            'gol'                   => $gol ,
            'lulusan'               => $lulusan ,
            'sekolah_kampus'        => $sekolah_kampus ,
            'jabatan_fungsional'    => $jabatan_fungsional ,
            'status'                => $status 
        );

        $simpan_data = $this->Mapi->insert('data_pegawai', $data);
    
        $response = array();
        if ($simpan_data) {
            $response['pesan'] = "Data Berhasil di Simpan";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Simpan";
            $response['hasil'] = false;
        }
        
        if ($simpan_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function insertKegiatan(){

        $id_kegiatan        = uniqid();
        $nama_kegiatan      = $this->input->post('nama_kegiatan');
        $alert              = $this->input->post('alert');
        $data = array(
            'id_kegiatan'   => $id_kegiatan,
            'nama_kegiatan' => $nama_kegiatan 
        );

        $simpan_data = $this->Mapi->insert('kegiatan', $data);
    
        $response = array();
        if ($simpan_data) {
            $response['pesan'] = "Data Berhasil di Simpan";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Simpan";
            $response['hasil'] = false;
        }
        
        if ($simpan_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

        /*Update*/

    public function updateSuratMasuk(){
        $response = array();
        $config['upload_path']    = './img/';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']       = '5000';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

            $response['pesan'] = 'Gagal Menyimpan Gambar'. $this->upload->display_errors();
            $response['hasil'] = false;
            
        
        } else {

            $data_upload        = $this->upload->data();
            $id_surat_masuk     = $this->input->post('id_surat_masuk');
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

            $surat_masuk = $this->Mapi->get_surat_masukbyid($id);
            $row = $surat_masuk->row();
            $img_before = $row->gambar;
            $path_img = './img/' . $img_before;
            unlink($path_img);

            $data=array(
                'id_surat_masuk'    => $id_surat_masuk,
                'kop_surat'         => $kop_surat,
                'tgl_surat'         => $tgl_surat,
                'alamat'            => $alamat,
                'kota'              => $kota,
                'kode_pos'          => $kode_pos,
                'id_kegiatan'       => $id_kegiatan,
                'tgl_msk_kegiatan'  => $tgl_msk_kegiatan,
                'tgl_klr_kegiatan'  => $tgl_klr_kegiatan,
                'gambar'            => $gambar
                );  

            $Update_data = $this->Mapi->update($data, 'surat_masuk', 'id_surat_masuk' ,$id_surat_masuk);
        
            $response = array();
            if ($Update_data) {
                $response['pesan'] = "Data Berhasil di Update";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di Update";
                $response['hasil'] = false;
            }
            

            if ($Update_data) {
                echo    "<script type='text/javascript'>
                        alert('",$response['pesan'],"'); 
                        document.location='",site_url($alert),"' 
                        </script>";
            } else {
                echo    "<script type='text/javascript'>
                        alert('",$response['pesan'],"');  
                        document.location='",site_url($alert),"' 
                        </script>";
            }         
        
        }
        
    }

    public function updateSuratKeluar(){
        date_default_timezone_set('Asia/Jakarta');

        $id                 = $this->input->post('id');
        $kop_surat          = $this->input->post('kop_surat');
        $tgl_surat          = date('y-m-d');
        $id_surat_masuk     = $this->input->post('id_surat_masuk');
        $nip                = $this->input->post('nip');


        $data=array(
            'id'                => $id,
            'kop_surat'         => $kop_surat,
            'tgl_surat'         => $tgl_surat,
            'id_surat_masuk'    => $id_surat_masuk,
            'id_surat_masuk'    => $institusi_sekolah,
            'nip'               => $nip
            );  

        $Update_data = $this->Mapi->update($data, 'surat_masuk', 'id' ,$id);
    
        $response = array();
        if ($Update_data) {
            $response['pesan'] = "Data Berhasil di Update";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Update";
            $response['hasil'] = false;
        }
        
        if ($Update_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function updatePeserta(){

        $nim_nis_ktp            = $this->input->post('nim_nis_ktp');
        $nama_peserta           = $this->input->post('nama_peserta');
        $kelas_semester         = $this->input->post('kelas_semester');
        $institusi_sekolah      = $this->input->post('institusi_sekolah');
        $jurusan                = $this->input->post('jurusan');
        $keterangan             = $this->input->post('keterangan');
        $pembimbing             = $this->input->post('pembimbing');
        $id_surat_masuk         = $this->input->post('id_surat_masuk');

        $data=array(
            'nim_nis_ktp'           => $nim_nis_ktp,
            'nama_peserta'          => $nama_peserta,
            'kelas_semester'        => $kelas_semester,
            'institusi_sekolah'     => $institusi_sekolah,
            'jurusan'               => $jurusan,
            'keterangan'            => $keterangan,
            'pembimbing'            => $pembimbing,
            'id_surat_masuk'        => $id_surat_masuk
            );  

        $Update_data = $this->Mapi->update($data, 'data_peserta', 'nim_nis_ktp' ,$nim_nis_ktp);
    
        $response = array();
        if ($Update_data) {
            $response['pesan'] = "Data Berhasil di Update";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Update";
            $response['hasil'] = false;
        }
        
        if ($Update_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function updatePegawai(){

        $nip                    = $this->input->post('nip');
        $nip_lama               = $this->input->post('nip_lama');
        $nama_pegawai           = $this->input->post('nama_pegawai');
        $bagian                 = $this->input->post('bagian');
        $gol                    = $this->input->post('gol');
        $lulusan                = $this->input->post('lulusan');
        $sekolah_kampus         = $this->input->post('sekolah_kampus');
        $jabatan_fungsional     = $this->input->post('jabatan_fungsional');
        $status                 = $this->input->post('status');

        $data=array(
            'nip'                   => $nip,
            'nip_lama'              => $nip_lama,
            'nama_pegawai'          => $nama_pegawai,
            'bagian'                => $bagian,
            'gol'                   => $gol,
            'lulusan'               => $lulusan,
            'sekolah_kampus'        => $sekolah_kampus,
            'jabatan_fungsional'    => $jabatan_fungsional,
            'status'                => $status
            );  

        $Update_data = $this->Mapi->update($data, 'data_pegawai', 'nip' ,$nip);
    
        $response = array();
        if ($Update_data) {
            $response['pesan'] = "Data Berhasil di Update";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Update";
            $response['hasil'] = false;
        }
        

        if ($Update_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function updateKegiatan(){

        $id_kegiatan = $this->input->post('id_kegiatan');
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $data=array(
            'nama_kegiatan' => $nama_kegiatan
            );  
    
        $Update_data = $this->Mapi->update($data, 'kegiatan', 'id_kegiatan' ,$id_kegiatan);
    
        $response = array();
        if ($Update_data) {
            $response['pesan'] = "Data Berhasil di Update";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di Update";
            $response['hasil'] = false;
        }
        

        if ($Update_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
        
    }
       
        /*delete*/

    public function deleteSuratMasuk($id){

        $surat_masuk = $this->Mapi->get_byid('surat_masuk', 'id_surat_masuk', $id);
        $row = $surat_masuk->row();
        $img_before = $row->gambar;
        $path_img = './img/' . $img_before;
        unlink($path_img);

        $response = array();
        if (unlink($path_img)){
            $hapus_data = $this->Mapi->delete('surat_masuk', 'id_surat_masuk', $id);
        
            if ($hapus_data) {
                $response['pesan'] = "Data Berhasil di delete";
                $response['hasil'] = true;
            } else {
                $response['pesan'] = "Data Gagal di delete";
                $response['hasil'] = true;
            }
            
        
        } else{
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
        }

        if ($hapus_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function deleteSuratKeluar($id){
        
        $hapus_data = $this->Mapi->delete('surat_keluar', 'id', $id);
    
        $response = array();
        if ($hapus_data) {
            $response['pesan'] = "Data Berhasil di delete";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
        }
        

       if ($hapus_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function deletePeserta($id){

        $hapus_data = $this->Mapi->delete('data_peserta', 'nim_nis_ktp', $id);
    
        $response = array();
        if ($hapus_data) {
            $response['pesan'] = "Data Berhasil di delete";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
        }
        

        if ($hapus_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function deletePegawai($id){

        $hapus_data = $this->Mapi->delete('data_pegawai', 'nip', $id);
    
        $response = array();
        if ($hapus_data) {
            $response['pesan'] = "Data Berhasil di delete";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
        }
        
        if ($hapus_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    public function deleteKegiatan($id){
        $hapus_data = $this->Mapi->delete('kegiatan', 'id_kegiatan', $id);
    
        $response = array();
        if ($hapus_data) {
            $response['pesan'] = "Data Berhasil di delete";
            $response['hasil'] = true;
        } else {
            $response['pesan'] = "Data Gagal di delete";
            $response['hasil'] = false;
        }
        
 
        if ($hapus_data) {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"'); 
                    document.location='",site_url($alert),"' 
                    </script>";
        } else {
            echo    "<script type='text/javascript'>
                    alert('",$response['pesan'],"');  
                    document.location='",site_url($alert),"' 
                    </script>";
        }         
    }

    /*Login*/

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cekpass  = ($password);
        
        $login  = $this->Mapi->cek($username,$password);
        $cek    = $login->num_rows();
        if ($cek == 1 ) {
            $data_ses  = $this->Mapi->cek($username,$password);
            foreach ($data_ses->result() as $data){
                $data_session = array(
                    'username'  => $data->username,
                    'email'     => $data->email,
                    'type'      => $data->type
                ); 
                $this->session->set_userdata($data_session);
                if ($data->type == 1) {
                    redirect('Superadmin');
                } elseif ($data->type == 2){
                    redirect('admin');
                } elseif ($data->type == 3){
                    redirect('karyawan');
                }
            }    
        } else {
            echo "<script type='text/javascript'>
                    alert('Username atau password Salah!!!'); 
                    document.location='http://localhost/pkl.batan.com/' 
                </script>";
        }
        
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url());
    }    

}