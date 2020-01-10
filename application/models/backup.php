<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backup extends CI_Model {

public function tampiltabel()
    {
       return $this->db->query('SHOW TABLES;');
    }


}