
window.addEventListener('scroll', function() {
const topBar = document.querySelector('.top-bar');

if (window.scrollY > 50) {
topBar.classList.add('topbar-scrolled');
} else {
topBar.classList.remove('topbar-scrolled');
}
});



window.addEventListener('scroll', function() {
const topBar = document.querySelector('.header');

if (window.scrollY > 20) {
topBar.classList.add('header-scrolled');
} else {;
topBar.classList.remove('header-scrolled');
}
});

