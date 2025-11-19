<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main_page</title>
    <link rel="stylesheet" href="Style/style2.css" />
    <script type="text/javascript" src="meow.js" defer></script>
  </head>
  <body>
    <div class="navbar">
      <div>
        <a class="hovermain" href="index.html">The little recepie heaven</a>
      </div>
      <div><a class="hover" href="aboutus.html">About us</a></div>
      <div><a class="hover" href="contact.html">Contact</a></div>
      <div class="dropdown">
        <a class="hover" class="dropbtn">Menu</a>
        <div class="dropdown-content">
          <a class="hover" href="recepies.html">Recepies</a>
          <a class="hover" href="addrecepies.html">Add recpies</a>
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
    <button class="adding" onclick="Addingfucntion()">
      <img src="Pictures/add.png" />
    </button>
  </body>
</html>
