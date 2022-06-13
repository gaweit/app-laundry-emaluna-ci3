<style>
  th{
    font-size: 14px;
    font-family: sans-serif;
    background: lightblue;
  }
</style>


<table width="750" border="0">
  <tr>
    <td style="text-align:center; font-size:24px; font-weight:bold; font-family:sans-serif">Laporan Operasional</td>
  </tr>
</table>

<table width="750" border="0">
  <tr>
    <td style="text-align:center; font-size:16px; font-family:sans-serif">Dari Tanggal <?= mediumdate_indo($this->session->userdata('tgl_mulai')); ?> Sampai Tanggal <?= mediumdate_indo($this->session->userdata('tgl_akhir')); ?></td>
  </tr>
</table>
<br><br>

<table width="750" border="1" style="border-collapse: collapse;">
  <tr>
    <th>Tanggal masuk</th>
    <th>Jenis Pengeluaran</th>
    <th>Nominal Pengeluaran</th>
    <th>Keterangan</th>

  </tr>

  public function index()
    {

        $title['title'] = ['header'=>'Laporan', 'dash'=>'Laporan'];
        // $data = $this->TransaksiModel->select();
        $data = ['transaksi'=>array(), 'pemesanan'=>array()];
        $this->load->view('admin/template/header', $title);
        $this->load->view('admin/laporan', $data);
        $this->load->view('admin/template/footer');
    }
    public function CetakPDF()
    {
        $this->load->library('mypdf');
        $view = "admin/cetaklaporan";
        $data = $this->TransaksiModel->select();
        $this->mypdf->generate($view,$data);
    }
    public function getprint()
    {
        $data = json_decode($this->security->xss_clean($this->input->raw_input_stream), true);
        $result = $this->TransaksiModel->AmbilLaporan($data);
        echo json_encode($result);

  <?php foreach($laporan as $row){ ?>
    <tr>
      <td><?= mediumdate_indo($row->tanggal); ?></td>
      <td><?= $row->jenis_pengeluaran; ?></td>
      <td><?= "Rp ".number_format($row->nominal_pengeluaran); ?></td>
      <td><?= $row->keterangan; ?></td>
    </tr>
  <?php } ?>
</table>