<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operasional extends CI_Controller {

  public function __construct(){
    parent:: __construct();
    $this->load->model('operasional_model');
  }

  public function index(){
    $data['content'] = 'backend/operasional/operasional';
    $data['title'] = 'Data Operasional';
    $data['konsumen'] = $this->operasional_model->getAllData();
    $this->load->view('backend/dashboard', $data);
  }
  function tambah(){

    $data['content'] = 'backend/operasional/tambah_operasional';
    $data['title'] = 'Form Tambah Operasional';

    $this->load->view('backend/dashboard', $data);
  }
  public function simpan(){
     date_default_timezone_set("Asia/Jakarta");

    $data = array(
      'jenis_pengeluaran'   => $this->input->post('jenis_pengeluaran'),
      'nominal_pengeluaran'   => $this->input->post('nominal_pengeluaran'),
      'keterangan' => $this->input->post('keterangan'),
      'tanggal'         =>  date("Y-m-d h:i:s"),
    );

    $query = $this->db->insert('pengeluaran', $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data pengeluaran berhasil disimpan');
      redirect('operasional');
    }
  }
}