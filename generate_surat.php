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

// Path logo (sesuaikan dengan struktur folder Anda)
$logoPath = 'Template_file/canyon/assets/img/logo/logo.png'; // Ganti dengan nama file logo sebenarnya

// Cek apakah logo ada
$logoExists = file_exists($logoPath);

// FUNGSI HITUNG SEMESTER BERDASARKAN NIM
function hitungSemesterDariNIM($nim, $tahunAkademikAwal = 2025) {
    // Ambil 2 digit pertama NIM sebagai tahun masuk
    $tahunMasuk = substr($nim, 0, 2);
    
    // Konversi ke tahun lengkap (asumsi 20xx)
    if ($tahunMasuk < 50) {
        $tahunMasukLengkap = 2000 + $tahunMasuk;
    } else {
        $tahunMasukLengkap = 1900 + $tahunMasuk;
    }
    
    // Hitung selisih tahun
    $selisihTahun = $tahunAkademikAwal - $tahunMasukLengkap;
    
    // Setiap tahun ada 2 semester (Ganjil dan Genap)
    $semester = ($selisihTahun * 2) + 1; // +1 karena semester ganjil
    
    // Pastikan semester minimal 1 dan maksimal 14
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
$pdf->SetY(15); // Posisi Y untuk header

// Logo di kiri (jika ada)
if ($logoExists) {
    $pdf->Image($logoPath, 20, 15, 25, 25); // x, y, width, height
    $pdf->SetX(50); // Geser posisi X setelah logo
} else {
    $pdf->SetX(20); // Jika logo tidak ada, mulai dari margin kiri
}

// Teks header di samping logo
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
$pdf->Cell(0,5,'Nomor : Ket-'.$nomorUrut.'/F.Psi/UM/'.$bulanSekarang.'/'.date('Y'),0,1,'C');
$pdf->Ln(5);

// Yang Bertanda Tangan
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,6,'Yang bertanda tangan di bawah ini :',0,1);
$pdf->Ln(2);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Nama',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,'Muhammad Untung Manara, S.Psi., MA., Ph.D',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'NIP',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'860/F.Psi',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Pangkat / Golongan',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'Penata/III-C',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Jabatan',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'Wakil Dekan Bidang Akademik & Kemahasiswaan',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Fakultas/Program Studi',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'Psikologi - S1 Psikologi',0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Instansi',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'Universitas Merdeka Malang',0,1);

$pdf->Ln(5);
$pdf->Cell(0,6,'Menerangkan kepada',0,1);
$pdf->Ln(2);

// Data Mahasiswa
$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Nama Mahasiswa',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,6,strtoupper($data['nama']),0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'NIM',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,$data['nim'],0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Semester',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,$semester,0,1);

$pdf->SetFont('Arial','',11);
$pdf->Cell(40,6,'Fakultas/Program Studi',0,0);
$pdf->Cell(5,6,':',0,0);
$pdf->Cell(0,6,'Psikologi - S1 Psikologi',0,1);

$pdf->Ln(3);

// Isi Surat
$pdf->SetFont('Arial','',11);
$isiSurat = 'Dengan ini kami menyatakan bahwa nama mahasiswa di atas benar tercatat sebagai mahasiswa aktif pada Program Studi Psikologi Fakultas Psikologi Universitas Merdeka Malang Semester Ganjil Tahun Akademik 2025/2026.';
$pdf->MultiCell(0,6,$isiSurat);
$pdf->Ln(5);
$pdf->MultiCell(0,6,'Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagai mana mestinya.');
$pdf->Ln(10);

// TANDA TANGAN DAN LOGO TTD (jika ada logo tanda tangan)
$ttdLogoPath = 'Template_file/canyon/assets/img/logo/ttd-manara.png'; // Ganti dengan path tanda tangan
$ttdLogoExists = file_exists($ttdLogoPath);

$pdf->Cell(0,6,'Malang, '.date('d F Y'),0,1,'R');

// Logo tanda tangan di kanan
if ($ttdLogoExists) {
    $pdf->Image($ttdLogoPath, 150, $pdf->GetY(), 30, 20);
    $pdf->Ln(25); // Beri jarak untuk logo tanda tangan
} else {
    $pdf->Ln(5);
}

$pdf->Cell(0,6,'a.n Dekan',0,1,'R');
$pdf->Cell(0,6,'Wakil Dekan I',0,1,'R');
$pdf->Cell(0,6,'Bidang Akademik dan Kemahasiswaan,',0,1,'R');
$pdf->Ln(15);

$pdf->SetFont('Arial','BU',11);
$pdf->Cell(0,6,'Muhammad Untung Manara, S.Psi., MA, Ph.D',0,1,'R');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,'NIDN : 0705128406',0,1,'R');
$pdf->Ln(10);

// Tembusan
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,6,'Tembusan : Yth.',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,6,'- Dekan Fakultas Psikologi Unmer Malang',0,1);

// Output
$filename = 'Surat_Keterangan_Aktif_' . $data['nim'] . '_' . date('Ymd') . '.pdf';
$pdf->Output('D', $filename);
exit;
?>