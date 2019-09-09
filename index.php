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
       <div id="api">
         <select id="artist">
           <option value="" disabled selected hidden>Filtra per artista</option>
           <option value="Antonello Venditti">Antonello Venditti</option>
           <option value="Asap Rocky">Asap Rocky</option>
           <option value="Denzel Curry">Denzel Curry</option>
           <option value="Vince Staples">Vince Staples</option>
           <option value="Russ">Russ</option>
           <option value="">- - Non filtrare - -</option>
         </select>
         <button id="go">Go</button>
         <br>
       </div>
    </div>
  </body>
</html>