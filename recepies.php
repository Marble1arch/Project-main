<?php 
  $data = file_get_contents("https://api.spoonacular.com/recipes/complexSearch?apiKey=a1aecf7aee09495da31dfc0a2d622111&number=15");
  $recepies = json_decode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main_page</title>
    <link rel="stylesheet" href="Style/style2.css"/>
    <link rel="stylesheet" href="Style/style.css" />
    <script type="text/javascript" src="meow.js" defer></script>
  </head>
  <body>
    <div class="navbar">
      <div>
        <a class="hovermain" href="index.html">The Recipes</a>
      </div>
      <div class="wrapping">
      <div><a class="hover" href="aboutus.html">About us</a></div>
      <div><a class="hover" href="contact.html">Contact</a></div>
    </div>
      <div class="dropdown">
        <a class="hover" class="dropbtn">Menu</a>
        <div class="dropdown-content">
          <a class="hover" href="recepies.php">Recipes</a>
          <a class="hover" href="addrecepies.php">Add recipes</a>
        </div>
      </div>
      <div class="toggle-switch">
        <button id="jew">
          <img
            src="Pictures/black.png"
            alt="moon"
            id="moon"
            width:30px;
            height:30px
          />
          <img
            src="Pictures/white.png"
            alt="sun"
            id="sun"
            width:30px;
            height:30px
          />
        </button>
      </div>
    </div>
      <div class="container-cards">
      <?php 
      foreach($recepies['results'] as $items){
        $sum = file_get_contents("https://api.spoonacular.com/recipes/".$items['id']."/summary?apiKey=a1aecf7aee09495da31dfc0a2d622111");
        $summary = json_decode($sum, true);
        echo "<div class="."card".">"."
        <img src='".$items['image']."'/>"."
        <div class='container'>"."
        <h3 class='Recipe-title'>".$items['title']."</h3>"."
        <p class='desc'>".$summary['summary']."</p>"."
        </div>"."
        </div>";
      }
        ?>
  </body>
</html>
