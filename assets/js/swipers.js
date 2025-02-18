const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".main__slider", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 5000, // установлено на 5 секунд
        disableOnInteraction: false
    },
    speed: 1000, // скорость перехода увеличена для более плавного перехода
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}`;
        }
    }
});



var swiper = new Swiper(".services__top__cards", {
    slidesPerView: "auto",
    spaceBetween: 30,
    speed: 1000, // Установите желаемую скорость перехода (например, 800 миллисекунд)
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        620: {
            spaceBetween: 30
        },
        450: {
            spaceBetween: 25
        },
        320: {
            spaceBetween: 20
        }
    },
});


var swiper = new Swiper(".slider_line", {
    slidesPerView: "auto",
    spaceBetween: 100,
    loop: true,
    speed: 8000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        1000: {
            spaceBetween: 100
        },
        // при ширине экрана менее 800px
        800: {
            spaceBetween: 80
        },
        // при ширине экрана менее 450px
        320: {
            spaceBetween: 60
        }
    }
});

var swiper = new Swiper(".slider_line2", {
    slidesPerView: "auto",
    spaceBetween: 100,
    loop: true,
    speed: 8000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        1000: {
            spaceBetween: 100
        },
        // при ширине экрана менее 800px
        800: {
            spaceBetween: 80
        },
        // при ширине экрана менее 450px
        320: {
            spaceBetween: 60
        }
    }
});


var swiper = new Swiper(".prices_swiper", {
    effect: "coverflow",
    initialSlide: 1,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});