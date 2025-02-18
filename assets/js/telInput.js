window.addEventListener("load", function () {
	var telInputs = document.querySelectorAll(".telCountry");
	telInputs.forEach(function (inputId) {
		let telInput = inputId;
		let hiddenInput = telInput.closest(".input").querySelector('input[type="hidden"]');
		var iti = intlTelInput(telInput, {
			autoHideDialCode: false,
			autoPlaceholder: "aggressive",
			initialCountry: "uz",
			separateDialCode: true,
			preferredCountries: ["uz", "ru", "kg", "kz", "tj"],
			customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
				return "" + selectedCountryPlaceholder.replace(/[0-9]/g, "X");
			},
			geoIpLookup: function (callback) {
				$.get("https://ipinfo.io", function () {}, "jsonp").always(function (resp) {
					var countryCode = resp && resp.country ? resp.country : "";
					callback(countryCode);
				});
			},
			utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js",
		});
		telInput.addEventListener("focus", function () {
			var pl = this.getAttribute("placeholder") + "";
			var res = pl.replace(/X/g, "9");
			if (res !== "undefined") {
				Inputmask(res, { placeholder: "X", clearMaskOnLostFocus: true }).mask(telInput);
			}
		});
		telInput.addEventListener("countrychange", function () {
			telInput.value = "";
		});
		telInput.addEventListener("blur", function () {
			var intlNumber = iti.getNumber();
			var countryCode = iti.getSelectedCountryData().iso2;
			telInput.setAttribute("data-country-code", countryCode); // Сохраняем код страны как атрибут данных
			hiddenInput.value = countryCode;
			var newVar = `${intlNumber}`;
			var formattedString =
				newVar.slice(0, 4) +
				" " +
				newVar.slice(4, 6) +
				" " +
				newVar.slice(6, 9) +
				" " +
				newVar.slice(9, 11) +
				" " +
				newVar.slice(11);
			hiddenInput.value = formattedString;
		});
	});
});
