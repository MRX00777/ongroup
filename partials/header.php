<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <link rel="shortcut icon" href="./../fav/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link href="https://cdn.jsdelivr.net/gh/Alaev-Co/snowflakes/dist/snow.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/global.css">

    <?php
    switch ($page) {
        case 'index':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            break;        
        case 'blogs':
            echo '<link rel="stylesheet" href="/assets/css/pages/blogs.css">';
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            break;        
        case 'blogs-details':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            echo '<link rel="stylesheet" href="/assets/css/pages/blogs-details.css">';
            break;        
    };
    ?>
    <title><?= $title ;?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_info container-fluid block">
                <div class="header_info_first">
                    <div class="header_info_first_worktime">
                        <i style="color: grey;" class="fa-solid fa-briefcase"></i>
                        <p>Работает: 8:00 - 17:00</p>
                    </div>
                    <div class="header_info_first_email">
                        <a href="mailto:leadercoding@gmail.com"><i style="color: grey;"
                                class="fa-regular fa-envelope"></i>
                            <p>leadercoding@gmail.com</p>
                        </a>
                    </div>
                </div>

                <div class="header_info_list">
                    <ul class="header_info_list_ancer">
                        <li><a href="">Помощь</a></li>/
                        <li><a href="">Поддерживать</a></li>/
                        <li><a href="">Контакт</a></li>
                    </ul>
                    <div class="header_info_list_network">
                        <p>Посетите нас:</p>
                        <ul>
                            <li><a href="https://t.me/Abduraxmonovich_Y"><i class="fa-brands fa-telegram"></i></a></li>
                            <li><a href="https://www.instagram.com/mrx__010101/"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-square-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header_nav container-fluid">
                <div class="header_nav_logo">
                    <a href="/"><img src="/fav/logo.jpg" alt="logo"></a>
                </div>
                <div class="header_nav_right">
                    <ul class="header_nav_right_links">
                        <li><a class="<?php echo ($page == 'index') ? 'active' : ''; ?>" href="/">Главная</a></li>
                        <li><a class="<?=$page == 'servise' ? 'active' : '';?>" href="#servis">Услуги</a></li>
                        <li><a class="<?=$page == 'portfolio' ? 'active' : '';?>" href="#portfolio">Портфолио</a></li>
                        <li><a class="<?=$page == 'about' ? 'active' : '';?>" href="#about">О компаний</a></li>
                        <li><a class="<?=$page == 'blogs' ? 'active' : '';?>" href="/pages/blogs.php">Блог</a></li>
                        <li><a class="<?=$page == 'contacts' ? 'active' : '';?>" href="#footer">Контакты</a></li>
                    </ul>
                    <div class="header_nav_right_tel">
                        <i class="fa-solid fa-phone"></i>
                        <div class="telephone">
                            <p>Звоните 24/7 в любое время</p>
                            <a href="tel:+998999406302">+998 (99) 940-63-02</a>
                        </div>
                        <div class="burger" onclick="toggleMobileMenu()">
                            <div class="burger__wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </header>