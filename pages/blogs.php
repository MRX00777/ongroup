<?php

$kw = '';
// Keywords for SEO
$desc = '';
// Description for SEO
$title = 'Блог';
$page = 'blogs';

include "../partials/header.php" ?>

<main>

    <section class="blog container-fluid">
        <div class="blog_teg">
            <div class="blog_teg-left"></div>
            <p>Блог и Новости</p>
            <div class="blog_teg-right"></div>
        </div>
        <div class="section-title">
            Наши последние новости и статьи
        </div>
        <div class="blog_cards">
            <?php for ($i=0; $i < 9; $i++) : ?>
            <div class="blog_cards_card">
                <div class="blog_cards_card-img">
                    <img src="/assets/images/slider-bg/1.webp" alt="">
                    <span></span>
                </div>
                <div class="blog_cards_card-info">
                    <div class="time">
                        <i class="fa-regular fa-calendar"></i>
                        <span>25 June, 2024</span>
                    </div>
                    <a href="" class="title">
                        Inside Hutch’s Playbook for Crafting Future-Centric Digital Experiences
                    </a>
                    <a href="../pages/blogs-details.php" class="button">
                        <p>Читать далее</p>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php endfor ?>
        </div>

        <div class="pg">
            <div class="row my-4">
                <div class="col-12 d-flex ">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include "../partials/footer.php" ?>