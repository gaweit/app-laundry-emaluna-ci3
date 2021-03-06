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

  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('pengajuan');
  }

  public function edit($id){
    $this->db->select('*');
    $this->db->from('pengajuan');
    $this->db->where('id', $id);
    return $this->db->get()->row_array();
  } 

  public function update($pengajuan, $data){
    $this->db->where('id', $id);
    $this->db->update('pengajuan', $data);
  }




}
