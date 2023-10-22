<?php include 'header_footer\header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/homepage.css">
    <link rel="stylesheet" href="/public/css/homepage.css">
    <script src="/public/JS/index.js" defer></script>

    <title>Homepage</title>
</head>

<body>
    <div class="hompage_content">

        <div class="banner_carousel">

            <div class="picture">
                <div class="genre_discription">
                    <div class="title">automotive</div> <a href="">
                        <div class="discover_button"><span>Discover more</span></div>
                    </a>
                </div>
                <img src="/public/assests/automotive/Mercedes-Benz GLC 43 AMG.webp" alt="">
                <img src="/public/assests/automotive/BMW M6 2015.webp" alt="">
                <img src="/public/assests/automotive/Mercedes-Benz GLC 43 AMGBACK.webp" alt="">

            </div>

            <div class="picture">
                <div class="genre_discription">
                    <div class="title">restaurants</div> <a href="">
                        <div class="discover_button"><span>Discover more</span></div>
                    </a>
                </div>
                <img src="/public/assests/restaurants/spiegel01.jpg" alt="">
                <img src="/public/assests/restaurants/spiegel02.jpg" alt="">
                <img src="/public/assests/restaurants/spiegel03.webp" alt="">

            </div>
        </div>


        <!-- <div class="banner_picture"> -->
        <!-- <div class="titel_genre">Automotive</div> -->
        <!-- <div class="automotive">
                <img src="/public/assests/Mercedes-Benz GLC 43 AMG.webp" alt="">
                <img src="/public/assests/Mercedes-Benz GLC 43 AMGBACK.webp" alt="">
                <img src="/public/assests/BMW M6 2015.webp">
                <img src="/public/assests/BMW M6 2015.webp">
            </div>
        </div> -->

        <?php
        $memberInfo = '';
        $members = $data['members'];
        foreach ($members as $member) {

            $profilepic = $member->profilepicture;
            $memberInfo .= "
        <div class='person'>
        <h3>$member->firstname $member->infix  $member->lastname</h3>
        <p>$member->function</p>
        <img src='$profilepic' alt=''>
        </div>
    ";
        }
        ?>

        <div class="our_team">
            <h1>Meet our <u>team.</u></h1>
            <div class="persons">
                <?= $memberInfo ?>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consequat, 
                    nisl non mattis malesuada, quam elit blandit urna, id consectetur risus lorem sed quam. 
                    Sed euismod sapien at nulla tincidunt, id venenatis justo eleifend. Nullam euismod eget ante vel laoreet. 
                    Sed auctor, metus in suscipit eleifend, augue felis dapibus neque, a bibendum quam quam quis ex. Suspendisse 
                </p>

                <span>Get in contact!</span>
                </div>
            </div>

        </div>




        <!-- <p>dit is een test bericht voor de medewerkers van NS</p> -->

    </div>
</body>

</html>

<?php include 'header_footer\footer.php' ?>