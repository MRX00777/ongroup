// document.addEventListener("DOMContentLoaded", function() {
//     var openModalButton = document.querySelector(".bottom__content-btn");
//     var modal = document.getElementById("modal___name");
//     var closeModalButton = modal.querySelector(".popup__content-close");
//     var submitButton = modal.querySelector(".button-form");
//     var nameInput = modal.querySelector('input[type="text"]');
//     var telInput = modal.querySelector('input[type="tel"]');
//     var emailInput = modal.querySelector('input[type="email"]');
//     // Добавляем обработчик события клика на кнопку открытия основной модалки
//     openModalButton.addEventListener("click", function() {
//         modal.classList.add("modal-show");
//         document.body.classList.add("no-scroll");
//     });
//     // Добавляем обработчик события клика на кнопку закрытия основной модалки
//     closeModalButton.addEventListener("click", function() {
//         modal.classList.remove("modal-show");
//         document.body.classList.remove("no-scroll");
//     });
//     // Добавляем обработчик события клика на кнопку отправки формы
//     submitButton.addEventListener("click", function(event) {
//         // Проверяем, заполнены ли обязательные поля
//         if (nameInput.value.trim() === '' || telInput.value.trim() === '' || emailInput.value.trim() === '') {
//             alert("Заполните обязательные поля");
//             return;
//         }
//         // Отображаем модальное окно с сообщением об успешной отправке
//         var successModal = document.querySelector('.success');
//         successModal.classList.add("modal-show");
//         // Добавляем обработчик события клика на любое место для закрытия модального окна
//         document.addEventListener("click", closeModalOnOutsideClick);
//         // Закрываем модальное окно с формой
//         modal.classList.remove("modal-show");
//         document.body.classList.remove("no-scroll");
//         // Закрываем модальное окно через 3 секунды
//         setTimeout(function() {
//             successModal.classList.remove("modal-show");
//             document.body.classList.remove("no-scroll");
//             document.removeEventListener("click", closeModalOnOutsideClick);
//         }, 3000);
//     });
//     // Функция для закрытия модального окна при клике на любое место вне его
//     function closeModalOnOutsideClick(event) {
//         if (!successModal.contains(event.target)) {
//             var successModal = document.getElementById("modal___name_success");
//             successModal.classList.remove("modal-show");
//             document.body.classList.remove("no-scroll");
//             document.removeEventListener("click", closeModalOnOutsideClick);
//         }
//     }
// });
"use strict";