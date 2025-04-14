const slide = document.querySelector('.carousel-slide');
const images = document.querySelectorAll('.carousel-slide img');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let counter = 0;

function updateSlide() {
  const size = window.innerWidth;
  slide.style.transform = `translateX(${-size * counter}px)`;
}

// Sự kiện khi click nút next
nextBtn.addEventListener('click', () => {
  counter = (counter + 1) % images.length;
  updateSlide();
});

// Sự kiện khi click nút prev
prevBtn.addEventListener('click', () => {
  counter = (counter - 1 + images.length) % images.length;
  updateSlide();
});

// Tự động chuyển slide
setInterval(() => {
  counter = (counter + 1) % images.length;
  updateSlide();
}, 5000); // 5s

// Resize lại slide khi thay đổi kích thước trình duyệt
window.addEventListener('resize', updateSlide);

// Khởi động ban đầu
updateSlide();
