function showContent(selectedValue) {
    // ซ่อนทุกแผนกก่อน
    document.querySelectorAll(".container-department").forEach(div => {
        div.classList.remove("show"); // ใช้ class เพื่อทำ animation
    });

    // แสดงเฉพาะแผนกที่ถูกเลือก
    let selectedDiv = document.getElementById(selectedValue);
    if (selectedDiv) {
        selectedDiv.classList.add("show");
    }
}

// แสดงระดับ ปวช. เป็นค่าเริ่มต้น
document.addEventListener("DOMContentLoaded", function () {
    showContent("Low");
});