let currentSlide = 0;
let slides = [];

const textSlides = document.querySelectorAll('.carousel-text-slide');
const tabBtns = document.querySelectorAll('.tab-btn-v3');

const img = document.getElementById('carouselImage');

fetch('/data/images.xml')
  .then(res => res.text())
  .then(str => new DOMParser().parseFromString(str, 'text/xml'))
  .then(xml => {
    slides = [...xml.querySelectorAll('slide')];
    goToSlide(0);
    startAutoSlide();
  });

function goToSlide(index) {
  if (!slides.length) return;

  currentSlide = index;

  textSlides.forEach((slide, i) => {
    slide.classList.toggle('opacity-100', i === index);
    slide.classList.toggle('opacity-0', i !== index);
    slide.classList.toggle('pointer-events-auto', i === index);
    slide.classList.toggle('pointer-events-none', i !== index);
    slide.classList.toggle('z-10', i === index);
    slide.classList.toggle('z-0', i !== index);
  });

  tabBtns.forEach((btn, i) => {
    btn.classList.toggle('active', i === index);
    btn.classList.toggle('text-gray-400', i !== index);
  });

  const imageUrl = slides[index].querySelector('image').textContent;

  img.classList.remove('opacity-100');
  img.classList.add('opacity-0');

  setTimeout(() => {
    img.src = imageUrl;
    img.classList.remove('opacity-0');
    img.classList.add('opacity-100');
  }, 300);
}

function startAutoSlide() {
  setInterval(() => {
    const next = (currentSlide + 1) % slides.length;
    goToSlide(next);
  }, 5000);
}
