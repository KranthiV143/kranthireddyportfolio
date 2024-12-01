<?php
require('fpdf.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Create instance of FPDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    // Add content to the PDF
    $pdf->Cell(0, 10, 'Resume of Hezron Wanakai', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Ln(10);
    $pdf->MultiCell(0, 10, "Name: Hezron Wanakai\nJob Title: Software Developer\nLocation: Nairobi, Kenya\nEmail: hezron@example.com\nPhone: +254712345678\n");
    $pdf->Ln(10);

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Skills:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "React: 90%\nPHP: 85%\nMySQL: 80%\n");

    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Work Experience:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "1. Software Developer - Tech Company (Jan 2022 - Current)\n- Developed robust web applications.\n\n2. Intern - Start-Up (Jan 2021 - Dec 2021)\n- Assisted in building dynamic websites.\n");

    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Education:', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 10, "University of Nairobi (2017 - 2021)\nBachelor of Science in Computer Science\n");

    // Output the PDF for download
    $pdf->Output('D', 'resume.pdf');
}
?>
