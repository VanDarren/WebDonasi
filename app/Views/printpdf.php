<?php

use setasign\Fpdi\Fpdi;

require_once ROOTPATH . 'vendor/autoload.php';

ob_start(); // Mulai penangkapan output

// Load the Excel file or use your existing data source
// ...

// Ambil tanggal awal dan tanggal akhir
$tanggalmulai = $tanggalmulai ?? 'default_start';
$tanggalakhir = $tanggalakhir ?? 'default_end';

// Format tanggal untuk digunakan dalam nama fail
$startDate = date('Ymd', strtotime($tanggalmulai));
$endDate = date('Ymd', strtotime($tanggalakhir));

// Buat nama fail berdasarkan tanggal awal dan akhir
$filename = 'data_' . $startDate . '_to_' . $endDate . '.pdf';

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Table to PDF');
$pdf->SetSubject('Table to PDF');

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Generate HTML table content
$html = '<h3>Tanggal Awal: ' . $tanggalmulai . ' - Tanggal Akhir: ' . $tanggalakhir . '</h3>';
$html .= '<table border="1" align="center" width="100%"><thead><tr>';
$html .= '<th scope="col" width="7%">No</th>';
$html .= '<th scope="col" width="20%">Nama Donatur</th>';
$html .= '<th scope="col" width="20%">Program</th>';
$html .= '<th scope="col" width="15%">Jumlah</th>';
$html .= '<th scope="col" width="15%">Pembayaran</th>';
$html .= '<th scope="col" width="15%">Tanggal</th>';
$html .= '</tr></thead><tbody>';

$no = 1;
foreach ($satu as $key) {
    $html .= '<tr>';
    $html .= '<td width="7%" align="center" height="16%">' . $no++ . '</td>';
    $html .= '<td width="20%" height="16%">' . $key->username . '</td>';
    $html .= '<td width="20%" height="16%">' . $key->nama_program . '</td>';
    $html .= '<td width="15%" height="16%">' . $key->jumlah_donasi . '</td>';
    $html .= '<td width="15%" height="16%">' . $key->jenis_pembayaran . '</td>';
    $html .= '<td width="15%" height="16%">' . $key->tanggal . '</td>';
    $html .= '</tr>';
}

$html .= '</tbody></table>';

// Output HTML content to PDF
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

// Capture the output
$pdfOutput = $pdf->Output('', 'S'); // Get PDF content as string

ob_end_clean(); // Clean the output buffer

// Save the PDF content to a file
file_put_contents($filename, $pdfOutput);

// Output the PDF file to download or save
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
readfile($filename);

exit;
?>
