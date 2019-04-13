<?php
$fileName = "E:/dp.pdf";
$fp = fopen($fileName,"r");
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}

$fileSize = filesize( $fileName );
$fileData = fread( $fp, $fileSize );
?>