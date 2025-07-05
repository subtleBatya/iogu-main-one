document.addEventListener("DOMContentLoaded", function () {
    const langToggle = document.getElementById("langToggle");
    if (langToggle) {
        langToggle.addEventListener("click", function (event) {
            event.preventDefault();

            const img = document.getElementById("langImage");
            const text = document.getElementById("langText");

            if (img && text) {
                if (text.innerText === "TM") {
                    img.src = "/images/right_logo.png";
                    text.innerText = "RU";
                } else {
                    img.src = "/images/logo.png";
                    text.innerText = "TM";
                }
            }
        });
    }
});
