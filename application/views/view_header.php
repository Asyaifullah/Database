<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><? echo $judul?> BSI</title>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css">
</head>

<body>
  <div id="wrapper">
    <header>
      <hgroup>
        <h1>WEB BSI</h1>
        <h3>Informasi</h3>
      </hgroup>
      <nav>
        <ul>
          <li><a href="<?php echo base_url().'index.php/web/user'?>">user</a></li>
          <li><a href="<?php echo base_url().'index.php/web/blog'?>">blog</a></li>
          <li><a href="<?php echo base_url().'index.php/web/home'?>">home</a></li>
        </ul>
      </nav>
      <div class='clear'></div>
    </header>