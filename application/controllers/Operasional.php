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
  public function edit($id){
    $data['content'] = 'backend/operasional/edit_operasional';
    $data['title'] = 'Form Ubah Operasional';
    $data['konsumen'] = $this->operasional_model->edit($id);
    $this->load->view('backend/dashboard', $data);
  }
  public function update(){

    $id_pengeluaran =   $this->input->post('id_pengeluaran');
    $data = array(

      'jenis_pengeluaran'   => $this->input->post('jenis_pengeluaran'),
      'nominal_pengeluaran'   => $this->input->post('nominal_pengeluaran'),
      'keterangan' => $this->input->post('keterangan'),
    );

    $query = $this->operasional_model->update($id_pengeluaran, $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data pengeluaran berhasil diupdate');
      redirect('operasional');
    }
  }

  public function delete($id){
    $query = $this->operasional_model->delete($id);
    
    if($query = true){
      $this->session->set_flashdata('info', 'Data pengeluaran berhasil dihapus');
      redirect('operasional');
    }
  }
}