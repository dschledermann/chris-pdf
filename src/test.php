<?php
require_once __DIR__ . '/../vendor/autoload.php';

$phpWord = PhpOffice\PhpWord\IOFactory::load('test1.docx');

PhpOffice\PhpWord\Settings::setPdfRendererPath(__DIR__ . '/../vendor/tecnickcom/tcpdf');
PhpOffice\PhpWord\Settings::setPdfRendererName('TCPDF');
$pdfWriter = PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
$pdfWriter->save('test1.pdf');

