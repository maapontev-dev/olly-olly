console.log("*** Main js working ***");

/* Open form modal window */
const modalForm = document.querySelector("#modal-form-js");
const scheduleButton = document.querySelector("#form-js");
scheduleButton.addEventListener("click", (e) => {
  e.preventDefault();
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

/* Form navigation logic */
let totalSteps = 3;
let currentStep = 0;
let lastStep;
const progressBar = document.querySelector("#form-nav-js");
const nextBtn = document.querySelector("#form-next-js");
const prevBtn = document.querySelector("#form-prev-js");
const navCircles = document.querySelectorAll(".c-form__circle");
const steps = document.querySelectorAll(".c-form__step");

/* Disable circles if the user goes a step back */
function disableNavCircles() {
  for (let i = currentStep; i < totalSteps; i++) {
    navCircles[i + 1].classList.remove("is-active");
  }
}

/* Activate circles in the current step */
function enableNavCircles() {
  for (let i = 0; i <= currentStep; i++) {
    navCircles[i].classList.add("is-active");
  }
}

/* Updates progress bar and navigatioj buttons */
function updateStepStatus() {
  progressBar.setAttribute("class", `c-form__nav step-${currentStep}`);
  steps.forEach((elem) => {
    elem.classList.remove("is-fading");
    elem.classList.remove("is-active");
  });
  steps[currentStep].classList.add("is-active");
  setTimeout(() => {
    steps[currentStep].classList.add("is-fading");
  }, 250);

  if(currentStep == 0) {
    prevBtn.classList.add('is-hidden');
  } else if(currentStep == totalSteps) {
    nextBtn.classList.add('is-hidden');
    prevBtn.classList.add('is-hidden');
  } else {
    prevBtn.classList.remove('is-hidden');
    nextBtn.classList.remove('is-hidden');
  }
}

/* Simple HTML validation verification to prevent users from
continuing without filling required data */
function validateStep() {
  const currentStepInput = steps[currentStep].querySelector("input");
  const currentError = steps[currentStep].querySelector(".c-form__error");
  if (currentStepInput.checkValidity()) {
    if (currentError) {
      currentError.classList.remove("is-active");
    }
    return currentStepInput.checkValidity();
  } else {
    if (currentError) {
      currentError.classList.add("is-active");
    }
  }
}

/* Next button functionality */
nextBtn.addEventListener("click", (e) => {
  e.preventDefault();
  if (validateStep()) {
    if (currentStep == totalSteps) {
      console.log("Already in last step");
    } else {
      currentStep++;
    }
    updateStepStatus();
    setTimeout(() => {
      enableNavCircles();
    }, 200);
  }
});

/* Previous button functionality */
prevBtn.addEventListener("click", (e) => {
  e.preventDefault();
  if (currentStep == 0) {
    console.log("Already in first step");
  } else {
    currentStep--;
  }
  disableNavCircles();
  setTimeout(() => {
    updateStepStatus();
  }, 150);
});
