let slide_index = 0;
let slide_play = true;
let slides = document.querySelectorAll(".slide");

const hideAllSlide = () => {
  slides.forEach((e) => {
    e.classList.remove("active");
  });
};

const showSlide = () => {
  hideAllSlide();
  slides[slide_index].classList.add("active");
};

const nextSlide = () =>
  (slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1);

const prevSlide = () =>
  (slide_index = slide_index - 1 < 0 ? slides.length - 1 : slide_index - 1);

// Tạm dừng slide khi di chuột qua thanh trượt
document
  .querySelector(".slider")
  .addEventListener("mouseover", () => (slide_play = false));

// Cho phép trượt khi chuột rời khỏi thanh trượt
document
  .querySelector(".slider")
  .addEventListener("mouseleave", () => (slide_play = true));

// Điều khiển thanh trượt
document.querySelector(".slide-next").addEventListener("click", () => {
  nextSlide();
  showSlide();
});

document.querySelector(".slide-prev").addEventListener("click", () => {
  prevSlide();
  showSlide();
});

const autoSlide = () => {
  if (slide_play) {
    nextSlide();
    showSlide();
  }
};
setInterval(autoSlide, 3000);

showSlide();
