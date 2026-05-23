const carousel = document.querySelector('.icon-carousel');
const dots = document.querySelectorAll('.pagination-dots .dot');

// ฟังก์ชันอัปเดตจุดแสดงหน้าสไลด์
function updateDots() {
  const scrollLeft = carousel.scrollLeft;
  const scrollWidth = carousel.scrollWidth - carousel.clientWidth;
  const index = Math.round((scrollLeft / scrollWidth) * (dots.length - 1));

  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });
}

// ตรวจจับการเลื่อนและอัปเดตจุด
carousel.addEventListener('scroll', updateDots);

// เพิ่มการคลิกจุดเพื่อเลื่อน
dots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    const itemWidth = carousel.querySelector('.icon-item').offsetWidth + 20; // รวม gap
    carousel.scrollTo({
      left: itemWidth * index,
      behavior: 'smooth',
    });
  });
});
