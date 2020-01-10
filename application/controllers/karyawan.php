<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // Codeigniter : Write Less Do More
        if ($this->session->userdata('type')!='3') {
            redirect(base_url());
        }
    }
    function index()
    {
        $this->template->load('karyawan/index','karyawan/suratMasuk');
    }
    function Peserta()
    {
        $this->template->load('karyawan/index','karyawan/peserta');
    }
    function password()
    {
        $this->template->load('karyawan/index','karyawan/password');
    }

}
