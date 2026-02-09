<?php
/**
 * Mail configuration for contact form (PHPMailer).
 * Leave useSmtp false to use PHP mail(); set true and fill in SMTP details to use SMTP.
 */
$mailUseSmtp   = false;
$mailHost      = 'smtp.example.com';
$mailPort      = 587;
$mailEncryption = 'tls';  // 'tls' or 'ssl'
$mailUsername  = '';
$mailPassword  = '';
$mailFromEmail = isset($siteEmail) ? $siteEmail : 'infolightingafricainsolar@gmail.com';
$mailFromName  = 'LIGHTING AFRICA IN SOLAR';
$mailToEmail   = isset($siteEmail) ? $siteEmail : 'infolightingafricainsolar@gmail.com';
$mailToName    = 'LIGHTING AFRICA IN SOLAR';
?>
