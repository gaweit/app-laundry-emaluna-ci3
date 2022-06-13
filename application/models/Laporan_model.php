<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

  public function filter_laporan($tgl_mulai, $tgl_akhir){
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen', 'left');
    $this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');
    $this->db->where('transaksi.tgl_masuk >=', $tgl_mulai);
    $this->db->where('transaksi.tgl_masuk <=', $tgl_akhir);
    $result =  $this->db->get()->result();
    return $result;
  }
  function filter_laporan_operasional($tgl_mulai, $tgl_akhir){
    $this->db->select('*');
    $this->db->from('pengeluaran');
    $this->db->where('pengeluaran.tanggal >=', $tgl_mulai);
    $this->db->where('pengeluaran.tanggal <=', $tgl_akhir);
    $result =  $this->db->get()->result();
    return $result;
  }



}