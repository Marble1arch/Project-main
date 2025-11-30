<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
{   
      if(empty($_POST["recipename"]))  
      {
        $error = 1;  
      }  else if(empty($_POST["desc"]))  { 
        $error=2; 
      }  else if(empty($_POST["img"]))  {
        $error = 3;  
      }  
      else  {  
           if(file_exists('Data.json'))  {  
                $current_data = file_get_contents('Data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'recipename'=>$_POST['recipename'],  
                     'desc'=>$_POST["desc"],  
                     'img'=>$_POST["img"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('Data.json', $final_data)){
                }
      }  
 }
}
 $dates=file_get_contents('Data.json');
  $stuff = json_decode($dates, true);
 ?>  
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main_page</title>
        <link rel="stylesheet" href="Style/style2.css">
    <link rel="stylesheet" href="Style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" defer></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" defer></script>
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
            height:30px;
          />
        </button>
      </div>
    </div>
  <button class="adding" id="open">
      <img src="Pictures/add.png" />
    </button>
    <div class="boxy" id="boxy">
      <div class="boxy-inner">
        <form method="post" id="data-form">
            <label class="lab">Recipe name</label>  </br />
            <input type="text" name="recipename" class="input" /><br />  
            <label class="lab">image (Link)</label>  </br />
            <input type="text" name="img" class="input" /><br />  
            <label class="lab">Description</label><br />
          <textarea
            id="desc"
            name="desc"
            placeholder="Write your recipe"
          ></textarea><br/>
            <button type="submit" name="submit" value="Append" class="submitbtn" id="close">Add recipe</button><br />     
        </form>
      </div>
    </div>
      <div class="container-cards">
        <?php 
        foreach($stuff as $items){
          echo "<div class="."card".">"."
          <img src='".$items['img']."'/>"."
          <div class='container'>"."
          <h3 class='Recipe-title'>".$items['recipename']."</h3>"."
          <p class='desc'>".$items['desc']."</p>"."
          </div>"."
          </div>";
        }
        
        ?>
        </div>
  </body>
</html>