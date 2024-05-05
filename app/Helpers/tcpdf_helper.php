<?php

namespace App\Helpers;

use TCPDF;


    function create_pdf($html, $filename, $paper_size = 'A4', $orientation = 'portrait')
    {
        // Create new PDF document
        $pdf = new TCPDF($orientation, 'mm', $paper_size, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle($filename);
        $pdf->SetSubject($filename);

        // Remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Set margins
        $pdf->SetMargins(10, 10, 10);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 12);

        // Add HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output PDF to browser
        $pdf->Output($filename . '.pdf', 'I');
    }
