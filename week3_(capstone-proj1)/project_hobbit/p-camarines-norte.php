<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Province - Camarines Norte</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/_header.css" rel="stylesheet" type="text/css">
    <link href="css/province.css" rel="stylesheet" type="text/css">
    <link href="css/_footer.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">        

    <style type="text/css">
      path[title="Camarines Norte"] {
        fill: #f3901b;
        fill-opacity: 1;
        stroke: gold;
        stroke-width:1;
      }
    </style>
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include 'partials/_header.html' ?>

    <main class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <h1>Camarines Norte</h1>
          <h3>Bicol Region</h3>
          <p>From Bicol, the province of Camarines was created in 1636, which was divided in 1829, creating Camarines Norte and Camarines Sur. They were briefly merged from 1854 to 1857 into Ambos Camarines (ambos is Spanish for "both") and again in 1893. The province was divided into Camarines Norte and Camarines Sur finally in 1917.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <?php include 'partials/_ph-map.html' ?>
        </div>
      </div>
    </main>

    <?php include 'partials/_footer.html' ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- additional javascript to enable dropdown submenu -->
    <script src="js/submenu.js"></script>  
  </body>
</html>