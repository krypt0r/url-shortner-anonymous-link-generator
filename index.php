<?php

$strurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = parse_url($strurl, PHP_URL_QUERY);
if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
    header("location:./refer.php?url=$url");
}

?> 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>URL Shortener and Anonymous Referer</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/bootstrap/css/style.css">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122355138-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122355138-1');
    </script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">URL Shortener</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/krypt0r/url-shortener-anonymous-link-generator">Github Repo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://gitter.im/krypt0r/URL-Shortner?utm_source=share-link&utm_medium=link&utm_campaign=share-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<br/>
<br/> 
    <!-- Page Content -->
    <div class="container" align="center">
      <div class="col-lg-6">
        <form id="input-form">
          <div class="input-group">
            <input id="originalUrl" type="text" class="form-control" placeholder="Paste a link to shorten">
            <span class="input-group-btn">
            <button class="btn btn-success" id="submit" type="submit">Shorten</button>
            </span>
          </div><!-- /input-group -->
        </form>
        <div id="shortUrl" class="">
        </div>
        <div id="qrcode" class="">
        </div>
        <div id="Error" class="">
        </div>
    </div><!-- /.col-lg-6 -->
    </div>
<footer class="bs-docs-footer fixed-bottom bg-dark text-white">
<div class="container" align="center">
<div class="col-lg-6">
<br/>

      <div class="footer-links">
         <h5 class="text-white" style="a.color:white;"> <a href="https://github.com/krypt0r/url-shortener-anonymous-link-generator">GitHub Repo</a> | <a href="https://github.com/krypt0r">URL Shortener by Kryptor.</a></h5>
          
<br/>

      </div>  
    </div><!-- /.col-lg-6 -->
</div>
</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/qrcode.js"></script>

  </body>

</html>
