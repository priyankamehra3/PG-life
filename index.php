<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h1 class="white pb-3">BOOK MY PG</h1>
        <h1 class="white pb-3">Happiness per Square Foot</h1>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Amritsar">
                    <div class="city-card rounded-circle">
                        <img src="img/amritsar1.png" class="city-img" />
                    </div>
                </a>
            </div>
            
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Pune">
                    <div class="city-card rounded-circle">
                        <img src="img/pune.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Ludhiana">
                    <div class="city-card rounded-circle">
                        <img src="img/ludhiana.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Chennai">
                    <div class="city-card rounded-circle">
                        <img src="img/chennai.png" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Chandigarh">
                    <div class="city-card rounded-circle">
                        <img src="img/chandigarh.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Jalandhar">
                    <div class="city-card rounded-circle">
                        <img src="img/jalandhar.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Surat">
                    <div class="city-card rounded-circle">
                        <img src="img/surat.jpg" class="city-img" />
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Kolkata">
                    <div class="city-card rounded-circle">
                        <img src="img/kolkata.jpg" class="city-img" />
                    </div>
                </a>
            </div>



        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
