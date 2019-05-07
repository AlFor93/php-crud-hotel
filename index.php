<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY_CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <script id="box-template" type="text/x-handlebars-template">
      <div class="ospite">
        <h3>{{Guest_Name}}</h3>
      </div>
    </script>
    <script id="payment-template" type="text/x-handlebars-template">
      <h3>{{payment_status}} {{price}}</h3>    
    </script>
    <!-- JS: MY_JS-->
    <script type="text/javascript" src="script.js"></script>
    <title>PhpCrud_Data</title>
  </head>
  <body>
    <div class="container">
      <h1>OSPITI</h1>

      <div class="guest-cont">
      </div>

      <h1>PAGAMENTI IN SOSPESO</h1>
      <div class="payment-cont">

      </div>

    </div>




  </body>
</html>
