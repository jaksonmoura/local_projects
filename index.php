<?php $except = ['index_files'] ?>
<!DOCTYPE html>
<!-- saved from url=(0019)http://10.84.1.234/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Intranet - ATS</title>
    <link rel="stylesheet" href="index_files/style_index.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./index_files/logo.png" alt="Jakson">
      </div>
    </header>
      <div class="wrapper">
        <nav>
          <ul class="systems">
          <?php
          $dirs = array_filter(glob('*'), 'is_dir');
          foreach ($dirs as $dir) {
            if (file_exists($dir."/index.php")){
              echo "<li><a href='$dir/index.php'>$dir</a></li>";
            }
          }
          ?>
          </ul>
        </nav>
      </div>