<?php
// panggil library FPDF
require('fpdf.php');
include 'koneksi.php';

// inisialisasi objek PDF
$pdf = new FPDF('L', 'mm', 'A5');
$pdf->AddPage();

// header
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 8, 'SEKOLAH MENENGAH KEJURUAN NEGERI 2 LANGSA', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR SISWA KELAS IX', 0, 1, 'C');
$pdf->Cell(190, 7, 'JURUSAN REKAYASA PERANGKAT LUNAK', 0, 1, 'C');

// spasi
$pdf->Ln(5);

// tabel header
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(25, 7, 'NIM', 1, 0, 'C');
$pdf->Cell(80, 7, 'NAMA SISWA', 1, 0, 'C');
$pdf->Cell(35, 7, 'NO HP', 1, 0, 'C');
$pdf->Cell(35, 7, 'TANGGAL LAHIR', 1, 1, 'C');

// isi data
$pdf->SetFont('Arial', '', 10);

$query = mysqli_query($connect, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($query)) {
    $pdf->Cell(25, 7, $row['nim'], 1, 0);
    $pdf->Cell(80, 7, $row['nama_lengkap'], 1, 0);
    $pdf->Cell(35, 7, $row['no_hp'], 1, 0);
    $pdf->Cell(35, 7, date('d-m-Y', strtotime($row['tanggal_lahir'])), 1, 1);
}

// output
$pdf->Output('I', 'Daftar_Siswa_RPL.pdf');
?>
