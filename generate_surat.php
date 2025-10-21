<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require(__DIR__ . '/FPDF/fpdf.php'); // coba tanpa ../ dulu
include __DIR__ . '/koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = intval($_GET['id']);
$q = mysqli_query($conn, "SELECT * FROM pengajuan_surat WHERE id=$id");
$data = mysqli_fetch_assoc($q);

if (!$data) {
    die("Data tidak ditemukan di tabel pengajuan_surat");
}

// cek apakah FPDF berhasil dipanggil
if (!class_exists('FPDF')) {
    die("FPDF tidak ditemukan! Cek path fpdf186/fpdf.php");
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Surat Keterangan',0,1,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Nama: '.$data['nama'],0,1);
$pdf->Cell(0,10,'NIM: '.$data['nim'],0,1);
$pdf->Cell(0,10,'Program Studi: '.$data['prodi'],0,1);
$pdf->Cell(0,10,'Jenis Surat: '.$data['jenis_surat'],0,1);
$pdf->MultiCell(0,10,'Keterangan: '.$data['keterangan']);

// langsung download
$pdf->Output('D', 'surat_'.$data['nim'].'.pdf');
exit;
