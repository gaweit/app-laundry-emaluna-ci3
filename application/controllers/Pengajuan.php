<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

  public function __construct(){
    parent:: __construct();
    $this->load->model('pengajuan_model');
  }
   public function index(){
    $data['content'] = 'backend/pengajuan/pengajuan';
    $data['title'] = 'Data Pengajuan Pengantaran';
    $data['pengajuan'] = $this->pengajuan_model->getAllData();
    $this->load->view('backend/dashboard', $data);
  }

}