<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo BASEURL . 'Assets/css/app.css';?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    <meta charset="UTF-8">
    <title><?php  echo (isset($title)) ?  $title : "SAF - 24 Hr Stream"; ?></title>
  </head>
  <body>
  <div id="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <ul class="nav justify-content-start">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo BASEURL ?>/drawing">Drawing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL ?>/upload">CSV Upload</a>
            </li>
          </ul>
        </div>
        <div class="col-6">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASEURL ?>/logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
