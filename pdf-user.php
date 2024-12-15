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
$pdf->Cell(270, 7, 'USER LIST', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Ln(10);

// Calculate the starting X position to center the table
$tableWidth = 150 + 80; // Total width of all columns
$pageWidth = $pdf->GetPageWidth();
$startX = ($pageWidth - $tableWidth) / 2;

// Move to the calculated starting X position
$pdf->SetX($startX);

// Header tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(150, 8, 'EMAIL', 1, 0, 'C');
$pdf->Cell(80, 8, 'USERTYPE', 1, 1, 'C'); // Closing the row

// Data dari database
$pdf->SetFont('Arial', '', 10);
include 'config.php';
$sql = "SELECT * FROM users";
$query = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($query)) {
    // Determine usertype as 'Admin' or 'User'
    $usertype = ($row['usertype'] == 1) ? 'Admin' : 'User';

    // Move to the calculated starting X position
    $pdf->SetX($startX);

    // Email
    $pdf->Cell(150, 8, $row['email'], 1, 0, 'L');

    // Usertype
    $pdf->Cell(80, 8, $usertype, 1, 1, 'C'); // Move to the next row
}

// Output PDF ke browser
$pdf->Output();
?>
