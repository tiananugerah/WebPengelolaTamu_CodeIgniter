<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // Codeigniter : Write Less Do More
        $this->load->model('backup');
        if ($this->session->userdata('type')!='1') {
            redirect(base_url());
        }
    }
    function index()
    {
        $this->template->load('superadmin/index','superadmin/charts');
    }

    function suratMasuk()
    {
        $alert = 'superadmin/suratMasuk';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/suratmasuk',$data);        
    }

    function suratKeluar()
    {
        $alert = 'superadmin/suratKeluar';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/suratkeluar',$data);
    }

    function Peserta($id)
    {
        $alert = 'superadmin/Peserta';
        $data = array(
            'id'      => $id,
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/peserta',$data);
    }

    function dataPeserta()
    {
        $alert = 'superadmin/dataPeserta';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/dataPeserta',$data);
    }

    function dataKaryawan()
    {
        $alert = 'superadmin/dataKaryawan';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/karyawan',$data);
    }

    function kegiatan()
    {
        $alert = 'superadmin/kegiatan';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/kegiatan',$data);        
    }

    function dataPesertaTerima()
    {
        $alert = 'superadmin/dataPesertaTerima';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/terima',$data);
    }

    function dataPesertaTdKTerima()
    {
        $alert = 'superadmin/dataPesertaTdKTerima';
        $data = array(
            'alert'   => $alert
            );
        $this->template->load('superadmin/index','superadmin/tidak',$data);
    }

    public function backup()
    {
        $this->load->model('backup');
         $data['tabel'] = $this->backup->tampiltabel(); //AMBIL DATA TABEL-TABEL
        $this->template->load('superadmin/index','superadmin/backupdata',$data);
    }

    public function restore()
    {
        $this->load->model('backup');
        $data['tabel'] = $this->backup->tampiltabel(); //AMBIL DATA TABEL-TABEL
        $this->template->load('superadmin/index','superadmin/restorydata',$data);
    }

    public function backupData()
    {
            // Load the DB utility class
        $this->load->dbutil();

             // Backup database dan dijadikan variable
        $backup = $this->dbutil->backup();

            // Load file helper dan menulis ke server untuk keperluan restore
        $this->load->helper('file');
        write_file('/backup/database/mybackup.zip', $backup);

            // Load the download helper dan melalukan download ke komputer
        $this->load->helper('download');
        force_download('mybackup.zip', $backup);
    }

    public function restoreData()    
    {

        $this->load->helper('file');
        $this->load->model('restore');
        $config['upload_path']="./asset/database/";
        $config['allowed_types']="jpg|png|gif|jpeg|bmp|sql|x-sql";
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if(!$this->upload->do_upload("datafile")){
            $error = array('error' => $this->upload->display_errors());
            echo "GAGAL UPLOAD";
            var_dump($error);
            exit();
        }

        $file = $this->upload->data();  //DIUPLOAD DULU KE DIREKTORI assets/database/
        $fotoupload=$file['file_name'];
                          
        $isi_file = file_get_contents('./asset/database/' . $fotoupload); //PANGGIL FILE YANG TERUPLOAD
        $string_query = rtrim( $isi_file, "\n;" );
        $array_query = explode(";", $string_query);   //JALANKAN QUERY MERESTORE KEDATABASE
        foreach($array_query as $query)
            {
                $this->db->query($query);
            }

            $path_to_file = './assets/database/' . $fotoupload;
            if(unlink($path_to_file)) {   // HAPUS FILE YANG TERUPLOAD
                redirect('superadmin/index','superadmin/backupdata');
            }else {
                echo 'errors occured';
            }
              
    }

}
