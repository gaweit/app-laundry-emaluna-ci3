<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    
    if(empty($this->session->userdata('username'))){
      redirect('panel');
    }

  }

  public function getAllData(){
    $result = $this->db->get('pengajuan')->result();
    return $result;
  }

}
