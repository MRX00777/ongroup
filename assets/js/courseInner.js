function openModalCourse(event) {
	const parent = event.target.closest(".reviews__item");
	const data = {
		img: parent.querySelector("img").src,
		name: parent.querySelector(".name").innerText,
		city: parent.getAttribute("data-city"),
		title: parent.querySelector(".infoTitle").innerText,
		text: parent.getAttribute("data-info"),
	};
	const modalParent = document.querySelector('[data-modal="reviewModal"]');
	const modal = {
		img: modalParent.querySelector("img"),
		name: modalParent.querySelector(".name"),
		city: modalParent.querySelector(".city"),
		title: modalParent.querySelector(".title"),
		text: modalParent.querySelector(".content"),
	};
	for (let key in data) {
		if (modal[key]) {
			modal[key].innerHTML = data[key];
			if (key === "img") {
				modal[key].src = data[key];
			}
		}
	}
	modalParent.classList.add("modal--active");
	document.body.classList.add("no-scroll");
}

function takeMbWithBtn() {
	const btn = document.querySelector(".courseInnerFixedBtn");
	const footer = document.querySelector(".footer");
	const footerPaddingBottom = window.getComputedStyle(footer).paddingBottom;
	if (btn) {
		const btnHeight = btn.offsetHeight;
		const btnBottomIndent = window.getComputedStyle(btn).bottom;
		footer.style.paddingBottom = `${
			btnHeight + Number(btnBottomIndent.slice(0, -2)) + Number(footerPaddingBottom.slice(0, -2))
		}px`;
	}
}
window.addEventListener("DOMContentLoaded", takeMbWithBtn());

const toggleNotification = () => {
	const notification = document.querySelector(".notification");
	if (notification) {
		notification.classList.toggle("notification-active");
	}
};

function untilEndOfMonth(block) {
	if (block) {
		const currentFields = {
			days: block.querySelector("#days"),
			hours: block.querySelector("#hours"),
			minutes: block.querySelector("#minutes"),
			seconds: block.querySelector("#seconds"),
		};

		setInterval(function () {
			const currentDate = new Date();
			const nextMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
			const timeUntilNextMonth = nextMonth - currentDate;
			const date = {
				days: Math.floor(timeUntilNextMonth / (1000 * 60 * 60 * 24)),
				hours: Math.floor((timeUntilNextMonth % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
				minutes: Math.floor((timeUntilNextMonth % (1000 * 60 * 60)) / (1000 * 60)),
				seconds: Math.floor((timeUntilNextMonth % (1000 * 60)) / 1000),
			};
			currentFields.days.innerHTML = date.days;
			currentFields.hours.innerHTML = date.hours;
			currentFields.minutes.innerHTML = date.minutes;
			currentFields.seconds.innerHTML = date.seconds;
		}, 0);
	}
}
const offlineCourseTime = document.querySelector("#offlineCourseTime");
window.addEventListener("load", () => {
	untilEndOfMonth(offlineCourseTime);
});
