<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_laundry extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('cek_laundry_model');
  }

  public function index(){
    $kode_transaksi = $this->input->post('kode_transaksi');
    $data['kode_transaksi'] = $this->cek_laundry_model->cek_status($kode_transaksi);
    $data['slider'] = $this->db->get('slider')->result();
    $this->load->view('frontend/header', $data);
    $this->load->view('frontend/cek_laundry', $data);
    $this->load->view('frontend/footer');
  }
  function ajukan_pengantaran(){
 date_default_timezone_set("Asia/Jakarta");

    $data['slider'] = $this->db->get('slider')->result();
    $this->load->view('frontend/header', $data);
    $this->load->view('frontend/ajukan_pengantaran', $data);
    $this->load->view('frontend/footer');
    if(isset($_POST['proses_pengantaran'])){

    $kode_transaksi = $this->input->post('kode_transaksi');
    $tgl_pengajuan = date("Y-m-d h:i:s");
    
    $cek = $this->cek_laundry_model->cek_transaksi($kode_transaksi);
  
    if (empty($cek)) {
        $this->session->set_flashdata('info', 'Data Transaksi Tidak Ada Periksa No Transaksi Anda!!!');
        redirect('cek_laundry/ajukan_pengantaran', 'refresh'); 
    }else{

    $array  = array('no_transaksi' => $kode_transaksi,'tanggal_pengajuan'=>$tgl_pengajuan, );
       
       $this->cek_laundry_model->adddata('pengajuan', $array);
       
        $this->session->set_flashdata('info', 'Pengajuan berhasil di Tambah');
        redirect('cek_laundry/ajukan_pengantaran', 'refresh'); 
    }
    }
  }




}