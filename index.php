<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOOOSECA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <style>
      body {font-family: Arial,sans-serif;}
      
      img {height: 150px;}

      h1 {text-align: center; color: blue;}

      .phpAlbum,.apiAlbum {
        display: inline-block;
        margin: 0 30px 20px;
      }

    </style>
  </head>
  <body>
  	<div id="main-container">
      <h1>Aggiunti da PHP</h1>
      <div id="php">
        <?php 
        //includo file db
        include "database.php";
        //stampo tutti gli album
        foreach ($albums as $albumArray) {
          echo '<div class="phpAlbum">' .
            '<h2>' . $albumArray['name'] . "</h2>" .
            '<h3>' . $albumArray['artist'] . "</h3>" .
            '<p>' . $albumArray['year'] . ", " . $albumArray['genre'] . "</p>" . 
            '<img src="' . $albumArray['cover'] . '">' .
            '</div>';
          }
         ?>
       </div>
       <hr>
       <h1>Aggiunti da API</h1>
       <div id="api"></div>
    </div>
  </body>
</html>