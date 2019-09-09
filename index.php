<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOOOSECA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <style>
      .phpAlbum {
        display: inline-block;
        margin: 30px;
      }
      .phpAlbum img {
        height: 150px;
      }
    </style>
  </head>
  <body>
  	<div id="main-container">
      <div id="php">
        <?php 
        //includo file db
        include "database.php";
        //stampo tutti gli album
        foreach ($albums as $albumArray) {
          echo '<div class="phpAlbum">' .
            '<h1>' . $albumArray['name'] . "</h1>" .
            '<h3>' . $albumArray['artist'] . "</h3>" .
            '<p>' . $albumArray['year'] . ", " . $albumArray['genre'] . "</p>" . 
            '<img src="' . $albumArray['cover'] . '">' .
            '</div>';
          }
         ?>
       </div>
    </div>
  </body>
</html>