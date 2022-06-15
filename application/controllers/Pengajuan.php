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
public function delete($id){
    $query = $this->pengajuan_model->delete($id);
    
    if($query = true){
      $this->session->set_flashdata('info', 'Data pengajuan berhasil dihapus');
      redirect('pengajuan');
    }
  }

  public function edit($id){
    $data['content'] = 'backend/pengajuan/edit_pengajuan';
    $data['title'] = 'Form Ubah pengajuan';
    $data['pengajuan'] = $this->pengajuan_model->edit($id);
    // var_dump($data['pengajuan']);
    // die;
    $this->load->view('backend/dashboard', $data);
  }

  public function update(){
    $id = $this->input->post('id');
    $data = array(
      'id'   => $this->input->post('id'),
      'status'   => $this->input->post('status'), 
    );
    $query = $this->pengajuan_model->update($id, $data);

    if($query = true){
      $this->session->set_flashdata('info', 'Data Pengajuan berhasil diupdate');
      redirect('pengajuan');
    }
  }
}