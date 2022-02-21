<?php
require_once __DIR__ . '/vendor/autoload.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mpdf = new \Mpdf\Mpdf();

$data ='';


//PDF
$data .='<h1>Jusu Detales</h1>';

// pridejimas data

$data .= '<strong>Vardas</strong> ' .$fname . '<br />';
$data .= '<strong>Pavarde</strong> ' .$lname . '<br />';
$data .= '<strong>El.pastas</strong> ' .$email . '<br />';
$data .= '<strong>Tel.Nr</strong> ' .$phone . '<br />';


if ($message)
{
    $data .= '<br /><strong>Zinute</strong><br />' .$message;
}

//PDF RASYMAS

$mpdf->WriteHTML($data);

//output browser

$mpdf->Output('duomenys.pdf','D');
