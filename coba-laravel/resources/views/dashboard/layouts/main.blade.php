<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aldira Givari | Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/css/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="/css/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="/css/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="/css/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/assets/css/style.css">
  <link rel="stylesheet" href="/css/assets/css/components.css">
  
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
{{-- Trix Editor --}}
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
}
</style>
<!-- /END GA --></head>
<body>
<div class="main-wrapper main-wrapper-1">
    @include('dashboard.layouts.header')
    @include('dashboard.layouts.sidebar')
    !-- Main Content -->
    <div class="main-content">
        <main class="col-md-9  col-lg-10 px-md-4"> 
            @yield('container')
        </main>
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Aldira Givari</a>
      </div>
      <div class="footer-right">
        
      </div>
    </footer>
  </div>
</div>
  <!-- General JS Scripts -->
  <script src="/css/assets/modules/jquery.min.js"></script>
  <script src="/css/assets/modules/popper.js"></script>
  <script src="/css/assets/modules/tooltip.js"></script>
  <script src="/css/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/css/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/css/assets/modules/moment.min.js"></script>
  <script src="/css/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="/css/assets/modules/jquery.sparkline.min.js"></script>
  <script src="/css/assets/modules/chart.min.js"></script>
  <script src="/css/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="/css/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="/css/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  
  <!-- Page Specific JS File -->
  <script src="/css/assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="/css/assets/js/scripts.js"></script>
  <script src="/css/assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>