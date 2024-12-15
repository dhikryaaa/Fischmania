<?php
// Memanggil library FPDF
require('phpfpdf/fpdf.php');

// Instance object dan memberikan pengaturan halaman PDF dengan orientasi landscape
$pdf = new FPDF('L', 'mm', 'A4'); // 'L' for Landscape

// Membuat halaman baru
$pdf->AddPage();

// Setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);

// Mencetak judul
$pdf->Cell(270, 7, 'FISCHMANIA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(270, 7, 'FISH LIST', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Ln(10);

// Calculate the starting X position to center the table
$tableWidth = 60 + 40 + 40 + 40 + 30; // Total width of all columns
$pageWidth = $pdf->GetPageWidth();
$startX = ($pageWidth - $tableWidth) / 2;

// Move to the calculated starting X position
$pdf->SetX($startX);

// Header tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(60, 8, 'FISH NAME', 1, 0, 'C');
$pdf->Cell(40, 8, 'BAIT', 1, 0, 'C');
$pdf->Cell(40, 8, 'TIME', 1, 0, 'C');
$pdf->Cell(40, 8, 'WEATHER', 1, 0, 'C');
$pdf->Cell(30, 8, 'SEASON', 1, 1, 'C'); // Closing the row

// Data dari database
$pdf->SetFont('Arial', '', 10);
include 'config.php';
$sql = "SELECT * FROM ikan";
$query = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($query)) {
    // Move to the calculated starting X position
    $pdf->SetX($startX);

    // Fish Name
    $pdf->Cell(60, 8, $row['name'], 1, 0, 'C');

    // Bait
    $pdf->Cell(40, 8, $row['bait'], 1, 0, 'C');

    // Time
    $pdf->Cell(40, 8, $row['time'], 1, 0, 'C');

    // Weather
    $pdf->Cell(40, 8, $row['weather'], 1, 0, 'C');

    // Season
    $pdf->Cell(30, 8, $row['season'], 1, 1, 'C'); // Move to the next row
}

// Output PDF ke browser
$pdf->Output();
?>