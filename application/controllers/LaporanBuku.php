<?php
class LaporanBuku extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $cnt = 1;
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(270, 7, 'UNIVERSITAS ATMA JAYA YOGYAKARTA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(270, 7, 'DAFTAR BUKU PERPUSTAKAAN 2019/2020', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'ID', 1, 0, 'C');
        $pdf->Cell(70, 6, 'NAMA BUKU', 1, 0, 'C');
        $pdf->Cell(45, 6, 'PENGARANG', 1, 0, 'C');
        $pdf->Cell(40, 6, 'JUMLAH HALAMAN', 1, 0, 'C');
        $pdf->Cell(40, 6, 'PENERBIT', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TAHUN TERBIT', 1, 0, 'C');
        $pdf->Cell(40, 6, 'KATEGORI BUKU', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $buku = $this->db->get('buku')->result();
        foreach ($buku as $row) {
            $pdf->Cell(10, 6, $cnt, 1, 0, 'C', 0);
            $pdf->Cell(70, 6, $row->nama_buku, 1, 0);
            $pdf->Cell(45, 6, $row->pengarang, 1, 0, 'C');
            $pdf->Cell(40, 6, $row->jumlah_halaman, 1, 0, 'C');
            $pdf->Cell(40, 6, $row->penerbit, 1, 0, 'C');
            $pdf->Cell(30, 6, $row->tahun_terbit, 1, 0, 'C');
            $pdf->Cell(40, 6, $row->kategori_buku, 1, 1, 'C');
            $cnt++;
        }
        $pdf->Output('D', 'LaporanBuku.pdf');
    }
}
