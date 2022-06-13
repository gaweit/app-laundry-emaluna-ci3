<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  public function __construct(){
    parent::__construct();

    $this->load->library('pdf');
    $this->load->model('laporan_model');
    $this->load->helper('tglIndo_helper');
  }

  public function index(){
    $data['content'] = 'backend/laporan/laporan';
    $data['title'] = 'Laporan Transaksi';
    $data['form1'] = 'Pengeluaran Operasional';
    $this->load->view('backend/dashboard', $data);
  }

  public function cetak_laporan_operasional(){

    $tgl_mulai = $this->input->post('tgl_mulai');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['laporan'] = $this->laporan_model->filter_laporan_operasional($tgl_mulai, $tgl_akhir);
  
    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();

    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('backend/laporan/cetak_laporan_operasional', $data);
  }
  public function cetak_laporan(){
    $tgl_mulai = $this->input->post('tgl_mulai');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $data['laporan'] = $this->laporan_model->filter_laporan($tgl_mulai, $tgl_akhir);
    $this->session->set_userdata('tgl_mulai', $tgl_mulai);
    $this->session->set_userdata('tgl_akhir', $tgl_akhir);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();

    $this->pdf->setPaper('A4', 'landscape');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('backend/laporan/cetak_laporan', $data);


  }


}