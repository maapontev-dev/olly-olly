console.log("*** Main js working ***");

/* Open form modal window */
const modalForm = document.querySelector("#modal-form-js");
const scheduleButton = document.querySelector("#form-js");
scheduleButton.addEventListener("click", (e) => {
  modalForm.classList.toggle("is-active");
  setTimeout(() => {
    modalForm.classList.toggle("is-fading");
  }, 10);
});

/* Close form modal window */
const closeModalButton = document.querySelector("#modal-close-js");
closeModalButton.addEventListener("click", (e) => {
  modalForm.classList.toggle("is-fading");
  setTimeout(() => {
    modalForm.classList.toggle("is-active");
  }, 260);
});
