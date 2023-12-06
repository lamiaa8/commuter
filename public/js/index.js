const slidePage = document.querySelector(".slide-page");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtn.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = `-${(current * 100) / 4}%`;
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});

prevBtn.addEventListener("click", function (event) {
  event.preventDefault();
  if (current > 1) {
    current -= 1;
    updateForm();
  }
});

submitBtn.addEventListener("click", function () {
  if (current < 3) {
    // Assuming there are 3 steps in your form
    current = 3; // Set current step to the final step
    updateForm();
    setTimeout(function () {
      alert("تم بدء الدورية الان");
    }, 800);
  }
});

function updateForm() {
  slidePage.style.marginLeft = `-${((current - 1) * 100) / 4}%`;
  for (let i = 0; i < bullet.length; i++) {
    if (i < current) {
      bullet[i].classList.add("active");
      progressCheck[i].classList.add("active");
      progressText[i].classList.add("active");
    } else {
      bullet[i].classList.remove("active");
      progressCheck[i].classList.remove("active");
      progressText[i].classList.remove("active");
    }
  }
}
