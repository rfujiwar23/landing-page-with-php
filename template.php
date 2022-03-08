<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
</head>
<body>
    


<?php echo $navbar; ?>

<?php echo file_get_contents("banner.html"); ?>





<div id="main">


  <?php echo $section01; ?>




  <?php echo file_get_contents("section02.html"); ?>

  <?php echo file_get_contents("section03.html"); ?>

  <?php echo file_get_contents("section04.html"); ?>



  <section class="section05">
   <div class="container">
    <div class="sect06-body">
      <h2 class="text-center my-5">全てを満たすのは<br class="br_on_12">ASIAインピタリだけ!!<br>
        2STEPトリートメントで<br class="br_on_12">ここまでできる！<br>
        最強の「インピタリ」を<br class="br_on_12">ぜひ体験してください。</h2>
    </div>
   </div>
  </section>

  <section class="section06">
   <div class="container">
     <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-6 to-links">
         <p class="text-center salon"><a href="https://www.ifing.com/asia/">美容師・美容室の方はこちら</a></p>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-6 to-links">
         <p class="text-center customer"><a href="https://www.ifing.com/asia/line-up/asia-inpitari-home-care/">一般のお客様はこちら</a></p>
      </div>
     </div>
   </div>
  </section>

  <?php echo $footer; ?>
  
</div>


    
</body>
</html>
