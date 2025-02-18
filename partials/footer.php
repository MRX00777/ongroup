   <footer id="footer" class="footer ">
       <div class="footer_content container-fluid">
           <div class="footer_content_first">
               <a href="/" class="footer_content_first-logo"><img src="/fav/logo.jpg" alt="logo"></a>
               <p>Deton родился из слияния видения и опыта. Основанный с верой в то, что у каждого бренда есть
                   уникальная история</p>

               <ul>
                   <li><a href=""><i class="fa-brands fa-telegram"></i></a></li>
                   <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                   <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                   <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
               </ul>
           </div>
           <div class="footer_content_second">
               <div class="footer_content_second-title">Полезные ссылки</div>
               <ul>
                   <li><a href="">
                           <i class="fa-solid fa-arrow-right"></i>
                           <p>О нас</p>
                       </a>
                   </li>
                   <li><a href="">
                           <i class="fa-solid fa-arrow-right"></i>
                           <p>Наша Галерея</p>
                       </a>
                   </li>
                   <li><a href="">
                           <i class="fa-solid fa-arrow-right"></i>
                           <p>Наши услуги</p>
                       </a>
                   </li>
                   <li><a href="">
                           <i class="fa-solid fa-arrow-right"></i>
                           <p>Наша команда</p>
                       </a>
                   </li>
               </ul>
           </div>
           <div class="footer_content_three">
               <div class="footer_content_three-title">Связаться с нами</div>
               <ul>
                   <li><a href="mailto:leadercoding@gmail.com">leadercoding@gmail.com</a></li>
                   <li><a href="tel:+998999406302">+998 (99) 940-63-02</a></li>
                   <li><a href="#">Ташкент, Узбекистан</a></li>
               </ul>
           </div>
           <div class="footer_content_four">
               <div class="footer_content_four-title">
                   Подписаться на рассылку
               </div>
               <form action="emailsend.php" method="POST">
                   <input type="email" placeholder="Адрес электронной почты" name="email" id="1">
                   <label>
                       <input type="checkbox" name="checkbox" id="2">
                       <p>Я согласен получать электронные письма</p>
                   </label>
                   <button type="submit">Зарегестрироваться</button>
               </form>
           </div>
       </div>

       <div class="footer_bottom">
           <div class="footer_bottom_content container-fluid">
               <p>© 28.01.2025 <a href="https://t.me/Abduraxmonovich_Y">Шарофов Ёкуб Абдурахмонович</a></p>
               <ul>
                   <li><a href="">Безопасность</a></li>|
                   <li><a href="">Условия предоставления услуг</a></li>
               </ul>
           </div>
       </div>
   </footer>


   </div>


   <script>
let mobileMenu = document.querySelector(".header_nav_right_links");
let burger = document.querySelector(".burger");
// const headerWrapper = document.querySelector('.header__wrapper__nav');

// headerWrapper.addEventListener('click', function(event) {
//     if (event.target == headerWrapper) {
//         toggleMobileMenu()
//     }
// })


const toggleMobileMenu = () => {
    mobileMenu.classList.toggle("active");
    burger.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
};
   </script>


   <!-- /.wrapper -->
   <script src="/assets/libraries/jquery/jquery.min.js"></script>
   <script src="/assets/libraries/swiper/swiper-bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
   <script src="/assets/libraries/phonemask/phonemask.min.js"></script>
   <script src="/assets/js/modal.js"></script>
   <script src="/assets/js/swipers.js"></script>
   <script src="/assets/js/script.js"></script>
   <script src="/assets/js/lazyImage.js"></script>
   <script src="/assets/js/telInput.js"></script>

   <script src="https://cdn.jsdelivr.net/gh/Alaev-Co/snowflakes/dist/Snow.min.js"></script>
   <script>
new Snow();
   </script>


   </body>

   </html>