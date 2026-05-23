const textArray = ["ยินดีต้อนรับ","Welcome to Thoeng Technical College", "Tel: 093-139-8190", "Opening Hours: เวลาทำการ :08.00 - 17.00 น."];
const typingElement = document.getElementById("typing");
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    const currentText = textArray[textIndex];
    if (isDeleting) {
        charIndex--;
    } else {
        charIndex++;
    }

    typingElement.textContent = currentText.slice(0, charIndex);

    if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true;
        setTimeout(typeEffect, 1000); // Pause before deleting
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        textIndex = (textIndex + 1) % textArray.length;
        setTimeout(typeEffect, 500); // Pause before typing next text
    } else {
        setTimeout(typeEffect, isDeleting ? 50 : 100); // Typing speed
    }
}

document.addEventListener("DOMContentLoaded", () => {
    typeEffect();
});