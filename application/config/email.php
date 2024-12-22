<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol']    = 'smtp';
$config['smtp_host']   = 'smtp.sendgrid.net';
$config['smtp_port']   = 587; //25 no encriptado
$config['smtp_user']   = 'apikey';  // Este es el usuario para SendGrid
$config['smtp_pass']   = '';  // Este es tu API key de SendGrid
$config['mailtype']    = 'html';
$config['charset']     = 'utf-8';
$config['wordwrap']    = TRUE;
$config['newline']     = "\r\n";  // Para asegurar el correcto formateo del correo
?>
