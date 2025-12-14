<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour And Travel</title>

    <!-- icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/styles.css') ?>">
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- scroll -->
    <style>
        header::before {
            position: absolute;
            content: ""; 
            height: 100%;
            width: calc(100% - 2rem);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-image: url(<?= base_url('public/assets/img/bg.jpg') ?>);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 3rem;
            z-index: -1;
        }
    </style>
</head>

<body>
    <nav>
        <div class="nav_header">
            <div class="nav_logo">
                <a href="" class="logo">
                    <img src="<?=base_url('public/assets/img/nexTech.png')?>" alt=""></a>
            </div>
            <div class="nav_menu_btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
        </div>

        <ul class="nav_links" id="nav-links">
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">TOUR</a></li>
            <li><a href="#">PACKAGE</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">BOOK TRIP</a></li>
        </ul>
        <div class="nav_btns">
            <button class="btn">BOOK TRIP</button>
        </div>
    </nav>

    <header id="home">
        <div class="header_container">
            <div class="header_content">
                <p>Elevate Your Journey</p>
                <h1>Experience The Magic of Flight!</h1>
                <div class="header_btns">
                    <button class="btn">Book a Trip Now</button>
                    <a href="#">
                        <span><i class="ri-play-circle-fill"></i></span>
                    </a>
                </div>
            </div>
            <div class="header_image">
                <img src="<?= base_url('public/assets/img/header.png') ?>" alt="airplane header">
            </div>
        </div>
    </header>

    <section class="section_container destination_container" id="about">
        <h2 class="section_header">Popular Destination</h2>
        <p class="section_description">
            Discover the Most Loved Destination around the Globe
        </p>

        <div class="destination_grid">
            <div class="destination_card">
                <img src="<?= base_url('public/assets/img/palawan.jpg') ?>" alt="">
                <div class="destination_card_details">
                    <div>
                        <h4>Tradition and Futurism</h4>
                        <p>Palawan, Philippines</p>

                    </div>
                    <div class="destination_rating"><span><i class="ri-star-fill"></i></span>
                        4.7</div>

                </div>
            </div>

            <div class="destination_card">
                <img src="<?= base_url('public/assets/img/image2.jpg') ?>" alt="">
                <div class="destination_card_details">
                    <div>
                        <h4>Any Any Any</h4>
                        <p>Paranaque, Philippines</p>

                    </div>
                    <div class="destination_rating"><span><i class="ri-star-fill"></i></span>
                        4.7</div>
                </div>
            </div>

            <div class="destination_card">
                <img src="<?= base_url('public/assets/img/intra.jpg') ?>" alt="">
                <div class="destination_card_details">
                    <div>
                        <h4>Outside The Wall City</h4>
                        <p>Manila, Philippines</p>

                    </div>
                    <div class="destination_rating"><span><i class="ri-star-fill"></i></span>
                        4.7</div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('public/assets/js/main.js') ?>"></script>
    <script src="https://unpkg.com/scrollreveal"></script> 




</body>


</html>
