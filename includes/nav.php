<nav class="header__item-center mobileMenu" onclick="toggleMobileMenu()">
    <div class="mobileMenu__container" onclick="event.stopPropagation()">
        <ul class="header__item_inner header__item_inner-nav">
            <li class="header__item_inner_link nav__link-btn <?php echo $active_tour ?>">
                <a href="./../tour-pages.php">
                    Туры
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $active_about_us ?>">
                <a href="./../about-us.php">
                    О нас
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $active_payment ?>">
                <a href="./../payment-method.php">
                    способы оплаты
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $active_contacts ?>">
                <a href="./../contacts.php">
                    Контакты
                </a>
            </li>
            <li id="popup__myprofile" class="header__item_inner_link">
                <a href="./../my-profile.php" class="btn <?php echo $active_my__profile?>">личный кабинет</a>
            </li>
        </ul>
        <div class="mobile__botton ">
        </div>
    </div>
</nav>