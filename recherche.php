<?php 
    session_start();
?>

<!doctype html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="css/style.css" rel="stylesheet" media="screen">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <title>Geoloc Agro</title>
    </head>
    <body>
        <?php 
        include('model/bdd_connect.php');
        include('model/bdd_requete_activite.php');
        ?>       
    </body>
</html>