<?php
    $name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
    $street_address = filter_input(INPUT_POST, 'street_address',  FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city',  FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state',  FILTER_SANITIZE_STRING);
    $zip_code = filter_input(INPUT_POST, 'zip_code', FILTER_SANITIZE_STRING);
    $ship_date = filter_input(INPUT_POST, 'ship_date', FILTER_SANITIZE_STRING);
    $order_number = filter_input(INPUT_POST, 'order_number', FILTER_VALIDATE_FLOAT);
    $length = filter_input(INPUT_POST, 'length', FILTER_VALIDATE_FLOAT);
    $width = filter_input(INPUT_POST, 'width', FILTER_VALIDATE_FLOAT);
    $height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT);
    $package_value = filter_input(INPUT_POST, 'package_value', FILTER_VALIDATE_FLOAT);

    function validateState($state) {
        $state_list = array("AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY");
        
        return in_array($state, $state_list);
    }

    function validateZipCode($zip_code) {
        if (strlen($zip_code) == 5 || (strlen($zip_code) == 10 && $zip_code[5] == '-')) {
            return true;
        }
    }

    $error_message = '';

    if ($name === FALSE) {
        $error_message .= 'Name must be valid.<br>';
    }

    elseif ($street_address === FALSE) {
        $error_message .= 'Street Address must be valid.<br>';
    }

    elseif ($city === FALSE) {
        $error_message .= 'City must be valid.<br>';
    }

    elseif (!validateState($state)) {
        $error_message .= 'Input valid State initials.<br>';
    }

    elseif (!validateZipCode($zip_code)) {
        $error_message .= 'Zip Code must be valid.<br>';
    }

    elseif (empty($ship_date)) {
        $error_message .= 'Ship Date must be valid.<br>';
    }

    elseif ($order_number === FALSE) {
        $error_message .= 'Order Number must be valid.<br>';
    }

    elseif ($length === FALSE) {
        $error_message .= 'Length must be a valid number.<br>';
    }

    elseif ($length >= 36) {
        $error_message .= 'Package length must be no more than 36 inches.<br>';
    }

    elseif ($width === FALSE) {
        $error_message .= 'Width must be a valid number.<br>';
    }

    elseif ($width > 36) {
        $error_message .= 'Package width must be no more than 36 inches.<br>';
    }

    elseif ($height === FALSE) {
        $error_message .= 'Height must be a valid number.<br>';
    }

    elseif ($height > 36) {
        $error_message .= 'Package height must be no more than 36 inches.<br>';
    }

    elseif ($package_value === FALSE) {
        $error_message .= 'Package Value must be a valid number.<br>';
    }

    if ($package_value >= 1000) {
        $error_message .= 'Package value must be no more than $1,000.<br>';
    }

    if($error_message != '') {
        include('shipping_page.php');
        exit();
    }

?>

<html>
    <head>
        <title>Shipping Page</title>
        <link rel="stylesheet" href="lukas_tech_shop.css"/>
        </head>
        <header>
            <h1>Shipping Page Results</h1>
        </header>
        </head>
    </head>
    <body>
        <h3>Package Information</h3>
        <h4>From Address: 141 Summit St, Newark, NJ 07103<h1>
        <label>To Address:</label><span><?php echo (' ' . $name . ', ' . $street_address . ', ' . $city . ', ' . $state . ' ' . $zip_code); ?></span>
        <br>
        <h4>Package Dimensions & Value</h4>
        <label>Dimensions (inches): </label><span><?php echo ($length . ' x ' . $width . ' x ' . $height); ?></span>
        <br>
        <label>Package Value: </label>
        <span><?php echo ('$' . $package_value); ?></span>
        <br>
        <h4>Shipping Company: UPS</h4>
        <h4>Shipping Class: Priority Mail</h4>
        <h4>Tracking Number: 1Z 123 X56 03 1234 5679</h4>
        <img src="images/ups_track.png" alt="html image" width = auto/>
        <br>
        <label>Order Number: </label>
        <span><?php echo ($order_number); ?></span>
        <br>
        <label>Ship Date: </label>
        <span><?php echo ($ship_date); ?></span>
        <br>
    </body>

    <footer>
        <h4> Navigation </h4>
        <nav>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/shipping_page.php">Shipping Page</a>
            <a href="http://localhost/LMNJIT/git/IT202-ldm29-Project/home_page.html">Home Page</a>
        </nav>
            <p>By Luka Mayer</p>
    </footer>
    
        <!-- Poppins Font from https://fonts.google.com/selection/embed -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</html>