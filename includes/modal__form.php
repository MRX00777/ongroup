

<form action="" id="modal___name" class="popup ">
    <button type="reset" class="popup__content-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.963748 1.21375C1.58208 0.595417 2.58459 0.595417 3.20292 1.21375L14.75 12.7608L26.2971 1.21375C26.9154 0.595417 27.9179 0.595417 28.5363 1.21375C29.1546 1.83208 29.1546 2.83459 28.5363 3.45292L16.9892 15L28.5363 26.5471C29.1546 27.1654 29.1546 28.1679 28.5363 28.7863C27.9179 29.4046 26.9154 29.4046 26.2971 28.7863L14.75 17.2392L3.20292 28.7863C2.58459 29.4046 1.58208 29.4046 0.963748 28.7863C0.345417 28.1679 0.345417 27.1654 0.963748 26.5471L12.5108 15L0.963748 3.45292C0.345417 2.83459 0.345417 1.83208 0.963748 1.21375Z" fill="#2B2B2B" />
        </svg>
    </button>
    <div class="popup__body-name">
        <div class="popup__content app">

            <div class="app-text">
                Заполните форму и мы с вами свяжемся
            </div>

            <div class="app__content">
                <div class="app__content__row">

                    <div class="input">
                        <label for="">Ваше имя <span>*</span></label>
                        <div class="input__content">
                            <input type="text" placeholder="Введите имя" required>
                        </div>
                    </div>

                    <div class="input" style="margin-bottom: 25px;">
                        <label for="">Номер телефона <span>*</span></label>
                        <div class="input__content" style="color: #1B1B1B;">
                            <input type="tel" id="telIndex" class="telCountry" required>
                            <input class="info__fill_number" type="hidden" name="phone">
                        </div>
                        <p>По этому номеру с вами свяжется наш специалист</p>
                    </div>

                </div>

                <div class="input">
                    <label for="">Электронная почта <span>*</span></label>
                    <div class="input__content">
                        <input type="email" placeholder="Введите почту" required>
                    </div>
                </div>
                <div class="input">
                    <label for="">Комментарий</label>
                    <div class="input__content">
                        <textarea type="text" placeholder="Введите комментарий" cols="20" rows="5"></textarea>
                    </div>
                </div>

                <button type="submit" class="button-form">
                    <p>отправить</p>
                </button>
            </div>

        </div>
    </div>
</form>