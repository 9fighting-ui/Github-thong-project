document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  counters.forEach((counter) => {
    counter.innerText = "0 คน";
    const updateCounter = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText.replace(" คน", "");
      const increment = target / 200; // ปรับความเร็วในการนับได้ที่นี่
      if (count < target) {
        counter.innerText = `${Math.ceil(count + increment)} คน`;
        setTimeout(updateCounter, 20);
      } else {
        counter.innerText = `${target} คน`;
      }
    };
    updateCounter();
  });
});
