<?php
session_start();
require_once('./include/conf.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta charset="utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <meta name="author" content="Project X">
  <title>Projekt X - Krakowskie Inwestycje - Panel Administracyjny</title>
  
  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="./css/top-stylesheet.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  
  <!-- JS -->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/jquery-1.8.2.min"></script>
  <script src="./js/scripts.js"></script>
  <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src=./js/dropzone.js></script>
  
  </head>
  <body onload="logged();">
    <div id="header_container">
       <div id="header_top">
        <span>x</span> pro<span>ject</span><br />
        <span>P</span>anel <span>A</span>dimnistracyjny
       </div>
    </div>
    
    <?php
      include_once('navigation.php');
    ?>

