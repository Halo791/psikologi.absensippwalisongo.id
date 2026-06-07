<?php
require_once __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fpdf/fpdf.php'; // pastikan path benar

if (!isset($_GET['id'])) {
    die("ID surat tidak ditemukan!");
}

$id = intval($_GET['id']);
$result = mysqli_query($conn, "SELECT * FROM pengajuan_surat WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Data surat tidak ditemukan!");
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'SURAT KETERANGAN',0,1,'C');
$pdf->Ln(10);

$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,8,"Yang bertanda tangan di bawah ini menerangkan bahwa:\n\n".
    "Nama : {$data['nama']}\n".
    "NIM : {$data['nim']}\n".
    "Program Studi : {$data['prodi']}\n\n".
    "Adalah benar mahasiswa aktif dan berhak mendapatkan {$data['jenis_surat']}.\n\n".
    "Keterangan tambahan: {$data['keterangan']}\n");

$pdf->Ln(20);
$pdf->Cell(0,10,"Malang, ".date('d-m-Y'),0,1,'R');
$pdf->Ln(20);
$pdf->Cell(0,10,"Ketua Program Studi",0,1,'R');

$pdf->Output("D","surat_{$data['nim']}.pdf"); // langsung download
exit;
