<?php 
    require_once('database_njit.php');

   //function getDB() {
        $dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=ldm29';
        $username = 'ldm29';
        $password = 'IT202mySQL@';
    
        try {
            $db = new PDO($dsn, $username, $password);
            // echo '<p>You are connected to the local database.</p>';
        } catch(PDOException $ex) {
            // -> equivalent of . in x.length() in java
            $error_message = $ex->getMessage();
            include('database_error.php');
            exit();
        }
       // return $db;
   //}

   //getDB();

    function getDB() {
        $dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=ldm29';
        $username = 'ldm29';
        $password = 'IT202mySQL@';
    
        try {
            $db = new PDO($dsn, $username, $password);
        } catch(PDOException $ex) {
            // -> equivalent of . in x.length() in java
            $error_message = $ex->getMessage();
            include('database_error.php');
            exit();
        }
       return $db;
   }
?>

<html>
    <head>
        <link rel="stylesheet" href="styles/lukas_tech_accessories.css"/>
        <link rel="shortcun icon" href="images/shop_logo.png"/>
    </head>
    <body>
        <main>
        </main>
    </body>
    <!-- Not needed for this page (when enabled it simply overlaps 
    with the footer on product_list page and create_products page)
    <footer>
        <h4> Navigation </h4>
        <nav>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/home_page.php">Home Page</a>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/shipping_page.php">Shipping Page</a>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/tech_accessories_product_list.php">Product List</a>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/create_products_form.php">Product Manager (Add Products)</a>
        </nav>
        <p>By L M</p>
    </footer>
    -->
    <!-- Poppins Font from https://fonts.google.com/selection/embed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</html>