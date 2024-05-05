<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;

require_once ROOTPATH . 'vendor/autoload.php';

// Load data
ob_start(); // Start capturing output

// Ambil tanggal awal dan tanggal akhir
$tanggalmulai = $tanggalmulai ?? 'default_start';
$tanggalakhir = $tanggalakhir ?? 'default_end';

// Format tanggal untuk digunakan dalam nama fail
$startDate = date('Ymd', strtotime($tanggalmulai));
$endDate = date('Ymd', strtotime($tanggalakhir));

// Buat nama fail berdasarkan tanggal awal dan akhir
$filename = 'data_' . $startDate . '_to_' . $endDate . '.xlsx';

// Buat objek Spreadsheet
$spreadsheet = new Spreadsheet();

// Set properties
$spreadsheet->getProperties()
    ->setCreator('Your Name')
    ->setLastModifiedBy('Your Name')
    ->setTitle('Table to Excel')
    ->setSubject('Table to Excel')
    ->setDescription('Table data exported to Excel');

// Add a worksheet
$sheet = $spreadsheet->getActiveSheet();

// Set column headers
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Donatur');
$sheet->setCellValue('C1', 'Program');
$sheet->setCellValue('D1', 'Jumlah');
$sheet->setCellValue('E1', 'Pembayaran');
$sheet->setCellValue('F1', 'Tanggal');

// Populate data from $satu array
$no = 1;
$row = 2; // Start from row 2 for data
foreach ($satu as $key) {
    $sheet->setCellValue('A' . $row, $no++);
    $sheet->setCellValue('B' . $row, $key->username);
    $sheet->setCellValue('C' . $row, $key->nama_program);
    $sheet->setCellValue('D' . $row, $key->jumlah_donasi);
    $sheet->setCellValue('E' . $row, $key->jenis_pembayaran);
    $sheet->setCellValue('F' . $row, $key->tanggal);

    $row++;
}

// Set border for entire data range
$lastColumn = $sheet->getHighestColumn();
$lastRow = $sheet->getHighestRow();
$dataRange = 'A1:' . $lastColumn . $lastRow;

$sheet->getStyle($dataRange)->applyFromArray([
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000'], // Border color (black)
        ],
    ],
]);

// Set auto column width
foreach (range('A', $lastColumn) as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Capture the output
ob_end_clean(); // Clear the output buffer

// Create a new writer and save the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$writer->save($filename);

// Output the Excel file to download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');
exit;
?>
