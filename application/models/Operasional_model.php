<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operasional_model extends CI_Model {

  public function __construct(){
    parent::__construct();
    
    if(empty($this->session->userdata('username'))){
      redirect('panel');
    }

  }

  public function getAllData(){
    $result = $this->db->get('pengeluaran')->result();
    return $result;
  }
  public function edit($id){
    $this->db->select('*');
    $this->db->from('pengeluaran');
    $this->db->where('id_pengeluaran', $id);
    return $this->db->get()->row_array();
  }
  public function update($id_pengeluaran, $data){
    $this->db->where('id_pengeluaran', $id_pengeluaran);
    $this->db->update('pengeluaran', $data);
  }

  public function delete($id){
    $this->db->where('id_pengeluaran', $id);
    $this->db->delete('pengeluaran');
  }
}