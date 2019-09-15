<?php
class LaporanMahasiswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $cnt = 1;
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string
        $pdf->Cell(190, 7, 'UNIVERSITAS ATMA JAYA YOGYAKARTA', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'DAFTAR MAHASISWA ANGKATAN 2019/2020', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 6, 'ID', 1, 0, 'C');
        $pdf->Cell(85, 6, 'NAMA MAHASISWA', 1, 0, 'C');
        $pdf->Cell(12, 6, 'NPM', 1, 0, 'C');
        $pdf->Cell(40, 6, 'FAKULTAS', 1, 0, 'C');
        $pdf->Cell(40, 6, 'PRODI', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10, 'C');
        $mahasiswa = $this->db->get('data_mahasiswa')->result();
        foreach ($mahasiswa as $row) {
            $pdf->Cell(10, 6, $cnt, 1, 0, 'C', 0);
            $pdf->Cell(85, 6, $row->NAMA, 1, 0);
            $pdf->Cell(12, 6, $row->NPM, 1, 0, 'C');
            $pdf->Cell(40, 6, $row->FAKULTAS, 1, 0, 'C');
            $pdf->Cell(40, 6, $row->PRODI, 1, 1, 'C');
            $cnt++;
        }
        $pdf->Output('D', 'LaporanMahasiswa.pdf');
    }
}
