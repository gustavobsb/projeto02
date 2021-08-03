<?php

require('assets/fpdf.php');

$date = (new Datetime())->getTimestamp();
$today = strftime('%d/%m/%Y', $date);
session_start();
requireValidSession();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, utf8_decode('  Carta de Recomendação'), '0', '0', 'C');
$pdf->ln(15);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(100, 10, utf8_decode('  Nome: ' . $_SESSION['user']->nome), '0', '0', 'L');
$pdf->ln();
$pdf->Cell(100, 10, utf8_decode('  Cargo:'), '0', '0', 'L');
$pdf->ln();
$pdf->Cell(100, 10, utf8_decode('  Nome congregação:'), '0', '0', 'L');
$pdf->ln(20);
$pdf->Cell(100, 10, utf8_decode('  Temos o prazer de apresentar o (a) portador (a) da presente, por se encontrar em plena')
    , '0', '0', 'L');
$pdf->ln();
$pdf->Cell(100, 10, utf8_decode('  comunhão com esta igreja a tempos.'), '0', '0', 'L');
$pdf->ln();
$pdf->Cell(100, 10, utf8_decode('  Portanto nós recomendamos para que o recebais no senhor como usam fazer os santos. '), '0', '0', 'L');
$pdf->ln();
$pdf->Cell(100, 10, utf8_decode('  O mesmo servia com aptidão á esssa congregação.'), '0', '0', 'L');
$pdf->ln(15);
$pdf->Cell(0, 10, utf8_decode('      Fraternalmente em Cristo,'), '0', '0', 'C');
$pdf->ln(40);
$pdf->Cell(0, 10, (" ____________________________,$today"), '0', '0', 'R');
$pdf->ln(35);
$pdf->Cell(40, 10, utf8_decode('____________________________  '), '0', '0', 'L');
$pdf->Cell(150, 10, utf8_decode('____________________________  '), '0', '0', 'R');
$pdf->ln();
$pdf->Cell(40, 10, utf8_decode('     Pastor Presidente  '), '0', '0', 'L');
$pdf->Cell(110, 10, utf8_decode('    Secretária  '), '0', '0', 'R');
$pdf->Output('carta de recomendacao.pdf', 'D');