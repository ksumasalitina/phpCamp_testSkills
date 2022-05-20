<?php
require_once 'configDB.php';
$productCount = mysqli_query($connect, "SELECT count(*) FROM Cart");
$productCount = mysqli_fetch_all($productCount);
$favCount = mysqli_query($connect, "SELECT count(*) FROM Favorites");
$favCount = mysqli_fetch_all($favCount);
$header='<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>JeweleryShop</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body id="app">
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-
white border-bottom box-shadow mb-3">
      <div class="container">
       <a class="navbar-brand" href="home.php">JeweleryWorkshop</a>
       <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
        <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item">
               <a class="nav-link text-dark" href="cartPage.php"><img src="https://cdn-icons-png.flaticon.com/512/3081/3081822.png" height="45"> {{CartCount}}</a>
                    </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="favoritesPage.php"><img src="https://inkscape.org/es/gallery/item/24401/heart2.jpg" height="45"> {{FavCount}}</a>
            </li>
                </ul>
            </div>
        </div>
    </nav>
                    <div>';

$footer = '
                    </div>

   <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
     <p>© 2017–2022 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
     </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue@next"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>';
