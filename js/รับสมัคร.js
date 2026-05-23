function showContent(id) {
    document.querySelectorAll('.container-document, .container-normal, .container-quota')
        .forEach(div => div.style.display = 'none');
    document.getElementById(id).style.display = 'block';
}
document.addEventListener("DOMContentLoaded", function () {
    showContent("Low");
});