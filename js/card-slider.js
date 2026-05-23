var swiper = new Swiper(".slider-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});

//ฟังชั่นข้อความเลื่อขึ้น
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function handleScrollAnimation() {
  const sliders = document.querySelectorAll(".card-slider, .gridsss-item");

  sliders.forEach((slider) => {
    if (isInViewport(slider)) {
      slider.classList.add("show");
    }
  });
}

window.addEventListener("scroll", handleScrollAnimation);

document.addEventListener("DOMContentLoaded", handleScrollAnimation);
