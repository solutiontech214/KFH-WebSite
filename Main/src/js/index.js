var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length };
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
}

let loader = document.getElementById("preLoader");
window.addEventListener("load", () => {
    loader.style.display = "none";
});


const allImages = document.querySelectorAll('.container1 img');

allImages.forEach(image => {
    image.addEventListener('click', () => {
        allImages.forEach(otherImage => {
            if (otherImage !== image) {
                otherImage.style.width = '10%';
                otherImage.style.height = '25%';
            }
        });
        image.style.width = '70%';
        image.style.height = '100%';
    });
});
