<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require(__DIR__ . '/FPDF/fpdf.php');
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

if (!class_exists('FPDF')) {
    die("FPDF tidak ditemukan! Cek path fpdf186/fpdf.php");
}

// Path logo universitas
$logoPath = 'Template_file/canyon/assets/img/logo/logo.png';
$logoExists = file_exists($logoPath);

// Path tanda tangan digital
$ttdPath = 'Template_file/canyon/assets/img/ttd/ttd_manara.png'; // Ganti dengan path tanda tangan yang sesuai
$ttdExists = file_exists($ttdPath);

// FUNGSI HITUNG SEMESTER BERDASARKAN NIM
function hitungSemesterDariNIM($nim, $tahunAkademikAwal = 2025) {
    $tahunMasuk = substr($nim, 0, 2);
    
    if ($tahunMasuk < 50) {
        $tahunMasukLengkap = 2000 + $tahunMasuk;
    } else {
        $tahunMasukLengkap = 1900 + $tahunMasuk;
    }
    
    $selisihTahun = $tahunAkademikAwal - $tahunMasukLengkap;
    $semester = ($selisihTahun * 2) + 1;
    
    if ($semester < 1) {
        $semester = 1;
    } elseif ($semester > 14) {
        $semester = 14;
    }
    
    return $semester;
}

// FUNGSI KONVERSI ANGKA KE ROMAWI
function angkaKeRomawi($angka) {
    $romawi = [
        'I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X',
        'XI', 'XII', 'XIII', 'XIV'
    ];
    
    if ($angka >= 1 && $angka <= count($romawi)) {
        return $romawi[$angka - 1];
    }
    
    return $angka;
}

// Tentukan semester
if (isset($data['semester']) && !empty($data['semester'])) {
    $semester = $data['semester'];
} else {
    if (isset($data['nim']) && strlen($data['nim']) >= 2) {
        $semesterAngka = hitungSemesterDariNIM($data['nim']);
        $semester = angkaKeRomawi($semesterAngka);
    } else {
        $semester = 'IV';
    }
}

$pdf = new FPDF();
$pdf->AddPage('P', 'A4');
$pdf->SetMargins(20, 15, 20);
$pdf->SetAutoPageBreak(true, 15);

// HEADER DENGAN LOGO
$pdf->SetY(15);

// Logo di kiri
if ($logoExists) {
    $pdf->Image($logoPath, 20, 15, 25, 25);
    $pdf->SetX(50);
} else {
    $pdf->SetX(20);
}

// Teks header
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,6,'UNIVERSITAS MERDEKA MALANG',0,1,'L');

$pdf->SetX($logoExists ? 50 : 20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,6,'FAKULTAS PSIKOLOGI',0,1,'L');

$pdf->SetX($logoExists ? 50 : 20);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,5,'Terakreditasi "B"',0,1,'L');

$pdf->SetX($logoExists ? 50 : 20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,'Kampus : Jl. Terusan Raya Dieng No. 62-64 Malang, Telp. (0341) 568395 Ext. 821',0,1,'L');

$pdf->SetX($logoExists ? 50 : 20);
$pdf->Cell(0,5,'Website : psikologi.unmer.ac.id -- Email: psikologi@unmer.ac.id',0,1,'L');

// Garis pemisah
$pdf->Ln(5);
$pdf->SetLineWidth(0.5);
$pdf->Line(20, $pdf->GetY(), 190, $pdf->GetY());
$pdf->Ln(8);

// Judul Surat
$pdf->SetFont('Arial','U',12);
$pdf->Cell(0,6,'SURAT KETERANGAN AKTIF KULIAH',0,1,'C');
$pdf->Ln(5);

// Nomor Surat
$nomorUrut = isset($data['id']) ? str_pad($data['id'], 3, '0', STR_PAD_LEFT) : '001';
$pdf->SetFont('Arial','',10);
$bulanRomawi = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
$bulanSekarang = $bulanRomawi[date('n') - 1];
$pdf->Cell(0,5,'Nomor : Ket-__________/F.Psi/UM/'.$bulanSekarang.'/'.date('Y'),0,1,'C');
$pdf->Ln(3); // Kurangi spasi

// Yang Bertanda Tangan (rapatkan)
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,5,'Yang bertanda tangan di bawah ini :',0,1);
$pdf->Ln(1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Nama',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,5,'Muhammad Untung Manara, S.Psi., MA., Ph.D',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'NIP',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'860/F.Psi',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Pangkat / Golongan',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'Penata/III-C',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Jabatan',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'Wakil Dekan Bidang Akademik & Kemahasiswaan',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Fakultas/Prodi',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'Psikologi - S1 Psikologi',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Instansi',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'Universitas Merdeka Malang',0,1);

$pdf->Ln(3); // Kurangi spasi
$pdf->Cell(0,5,'Menerangkan kepada',0,1);
$pdf->Ln(1);

// Data Mahasiswa
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Nama Mahasiswa',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,5,strtoupper($data['nama']),0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'NIM',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,$data['nim'],0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Semester',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,$semester,0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,5,'Fakultas/Prodi',0,0);
$pdf->Cell(5,5,':',0,0);
$pdf->Cell(0,5,'Psikologi - S1 Psikologi',0,1);

$pdf->Ln(3); // Kurangi spasi

// Isi Surat
$pdf->SetFont('Arial','',11);
$isiSurat = 'Dengan ini kami menyatakan bahwa nama mahasiswa di atas benar tercatat sebagai mahasiswa aktif pada Program Studi Psikologi Fakultas Psikologi Universitas Merdeka Malang Semester Ganjil Tahun Akademik 2025/2026.';
$pdf->MultiCell(0,5,$isiSurat);
$pdf->Ln(3);
$pdf->MultiCell(0,5,'Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagai mana mestinya.');
$pdf->Ln(5);

// TANDA TANGAN - Bagian ini akan menampilkan gambar tanda tangan
$pdf->Cell(0,5,'Malang, '.date('d F Y'),0,1,'R');
$pdf->Ln(3); // Spasi minimal

$pdf->Cell(0,5,'a.n Dekan',0,1,'R');
$pdf->Cell(0,5,'Wakil Dekan I Bidang Akademik dan Kemahasiswaan',0,1,'R');
$pdf->Ln(12); // Spasi untuk tanda tangan

// Tanda Tangan sebagai Gambar
if ($ttdExists) {
    // Hitung posisi X untuk tanda tangan (rata kanan dengan margin)
    $ttdWidth = 40; // Lebar tanda tangan
    $ttdHeight = 20; // Tinggi tanda tangan
    $xPosition = 190 - $ttdWidth - 20; // 190 adalah lebar A4, 20 adalah margin kanan
    
    // Tampilkan gambar tanda tangan
    $pdf->Image($ttdPath, $xPosition, $pdf->GetY(), $ttdWidth, $ttdHeight);
    
    // Geser posisi Y untuk nama di bawah tanda tangan
    $pdf->SetY($pdf->GetY() + $ttdHeight + 5);
} else {
    // Jika tanda tangan gambar tidak ada, gunakan garis dan teks biasa
    $pdf->Ln(15); // Spasi untuk garis tanda tangan
    $pdf->SetLineWidth(0.5);
    $pdf->Line(140, $pdf->GetY(), 180, $pdf->GetY());
    $pdf->Ln(5);
}

// Nama dan NIDN di bawah tanda tangan
$pdf->SetFont('Arial','BU',11);
$pdf->Cell(0,5,'Muhammad Untung Manara, S.Psi., MA, Ph.D',0,1,'R');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,5,'NIDN : 0705128406',0,1,'R');
$pdf->Ln(5);

// TEMBUSAN - ditempatkan di kiri bawah dalam 1 halaman
$currentY = $pdf->GetY();

// Jika posisi Y masih cukup untuk tembusan
if ($currentY < 250) {
    // Tembusan di kiri
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,5,'Tembusan : Yth.',0,1);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,5,'1. Dekan Fakultas Psikologi Unmer Malang',0,1);
    $pdf->Cell(0,5,'2. Arsip Fakultas',0,1);
} else {
    // Jika posisi terlalu rendah, buat halaman baru
    $pdf->AddPage();
    $pdf->SetY(20);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,5,'Tembusan : Yth.',0,1);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,5,'1. Dekan Fakultas Psikologi Unmer Malang',0,1);
    $pdf->Cell(0,5,'2. Arsip Fakultas',0,1);
}

// Output
$filename = 'Surat_Keterangan_Aktif_' . $data['nim'] . '_' . date('Ymd') . '.pdf';
$pdf->Output('D', $filename);
exit;
?>
