<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller { 
    public function __construct(){
        parent::__construct();
        // Codeigniter : Write Less Do More
        if ($this->session->userdata('type')!='2') {
            redirect(base_url());
        }
    }
    
    function index()
    {
        $this->template->load('admin/index','admin/charts');
    }
    function Peserta()
    {
        $this->template->load('admin/index','admin/peserta');
    }
    function user()
    {
        $this->template->load('admin/index','admin/password');
    }
    function datapeserta()
    {
        $this->template->load('admin/index','admin/dataPeserta');
    }
    function suratKeluar()
    {
        $this->template->load('admin/index','admin/suratKeluar');
    }
    function suratMasuk() 
    {       
        $this->template->load('admin/index','admin/suratMasuk');
    }

}
