<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $captcha_response = $_POST['g-recaptcha-response'];

//     if (!$captcha_response) {
//         echo "Please complete the CAPTCHA.";
//     } else {
//         $secret_key = "6Ldg1ogpAAAAAPU0xjy_8P8hcox-WNwWLEH_68BX";

//         $url = 'https://www.google.com/recaptcha/api/siteverify';
//         $data = [
//             'secret' => $secret_key,
//             'response' => $captcha_response
//         ];
//         $options = [
//             'http' => [
//                 'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
//                 'method' => 'POST',
//                 'content' => http_build_query($data)
//             ]
//         ];
//         $context = stream_context_create($options);
//         $result = file_get_contents($url, false, $context);

//         $result_json = json_decode($result);
//         if ($result_json && $result_json->success) {
//             echo "CAPTCHA is valid. Proceed with login process.";
//         } else {
//             echo "Failed to verify CAPTCHA. Please try again.";
//         }
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DonasiBersama - Peduli Sesama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url("img/favicon.ico")?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url("lib/animate/animate.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("lib/owlcarousel/assets/owl.carousel.min.css")?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url("css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url("css/style.css")?>" rel="stylesheet">
    
</head>

<body>
    