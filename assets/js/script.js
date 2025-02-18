$(document).ready(function () {
	$(".tel-mask").mask("+998 11 111 11 11");
	$(".tel-mask").on("focus", function () {
		$(this).val("+998");
	});
	$("[data-fancybox='gallery']").fancybox({
		buttons: ["slideShow", "share", "zoom", "fullScreen", "download", "thumbs", "close"],
		image: {
			preload: false,
		},
	});
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();

		const sectionId = this.getAttribute("href");
		const section = document.querySelector(sectionId);
		const headerHeight = document.querySelector("header").offsetHeight;
		const sectionTop = section.offsetTop - headerHeight;

		const scrollOptions = {
			top: sectionTop,
			behavior: "smooth",
		};

		const startTime = performance.now();
		const duration = 1000;
		const startTop = window.pageYOffset;

		function scroll(timestamp) {
			const timeElapsed = timestamp - startTime;
			const progress = Math.min(timeElapsed / duration, 1);

			const easeInOutQuad = (t) => (t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t);

			const scrollTop = startTop + easeInOutQuad(progress) * (sectionTop - startTop);

			window.scrollTo({
				top: scrollTop,
				behavior: "auto",
			});

			if (timeElapsed < duration) {
				requestAnimationFrame(scroll);
			}
		}

		requestAnimationFrame(scroll);
	});
});

function openTab(evt, tabName) {
	var i, tabcontent, tablinks;
	let tab = evt.target.closest(".tab");
	tabcontent = tab.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].classList.remove("active");
	}
	tablinks = tab.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].classList.remove("active");
	}
	document.getElementById(tabName).classList.add("active");
	evt.currentTarget.classList.add("active");
}
let header = document.querySelector(".header");
let prevScrollPos = window.pageYOffset;

window.addEventListener("scroll", function () {
	let currentScrollPos = window.pageYOffset;
	if (prevScrollPos > currentScrollPos) {
		// Scrolling Up
		header.classList.remove("scrolled");
	} else {
		// Scrolling Down
		header.classList.add("scrolled");
	}
	prevScrollPos = currentScrollPos;
});

let main = document.querySelector("main");
let headerHeight = document.querySelector("header").offsetHeight;
window.addEventListener("load", function () {
	if (!main.classList.contains("main")) {
		main.style.marginTop = `${headerHeight}px`;
	}
});

window.addEventListener("load", function () {
	document.body.style = `--header-height: ${headerHeight}px`;
});

const fixNav = () => {
	if (window.scrollY > 1) {
		header.classList.add("scrolled");
	} else {
		header.classList.remove("scrolled");
	}
};

window.addEventListener("scroll", fixNav);

const accardionToggle = (slideMenu) => (e) => {
	slideMenu.forEach((links) => {
		const hidePanel = links.nextElementSibling;
		if (links === e.currentTarget) {
			e.currentTarget.classList.toggle("active");
			hidePanel.classList.toggle("active-block");
		} else {
			links.classList.remove("active");
			hidePanel.classList.remove("active-block");
		}
	});
};
const slideMenu = document.querySelectorAll(".accardion-link");

slideMenu.forEach((links) => {
	links.addEventListener("click", accardionToggle(slideMenu));
});





// tabs function index.php start


function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";
}

// tabs function index.php end