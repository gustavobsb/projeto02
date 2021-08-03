<?php
session_start();
requireValidSession();

require('assets/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 12);

$pdf->Image('assets/carteirinha.jpg', 5, 20, 200);

$pdf->Output('Carteirinha_de_membro.pdf', 'D');