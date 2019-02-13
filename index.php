<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style type="text/css">
    	
    </style>

    <title>Ciao, mondo!</title>
  </head>

  <body>
 		
 		<ul>
  	<?php
  		$a = ['item 1', 'item 2', 'item 3'];

  		for ($i=0; $i < count ($a) ; $i++) { 
  	  	print '<li>'.$a [$i].'</li>';
  	  }
  	?>
  	</ul>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 