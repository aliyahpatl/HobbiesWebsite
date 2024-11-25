const imageWrapperR = document.querySelector(".image-wrapperR");
const imageItemsR = document.querySelectorAll(".image-wrapperR > div");
const imageLengthR = imageItemsR.length;
const perViewR = 3;
let totalScrollR = 0;
const delayR = 1500; // Adjusted delay to make the scroll faster

imageWrapperR.style.setProperty("--per-view", perViewR);
for (let i = 0; i < perViewR; i++) {
  imageWrapperR.insertAdjacentHTML("beforeend", imageItemsR[i].innerHTML);
}

let autoScrollR = setInterval(scrollingR, delayR);

function scrollingR() {
  totalScrollR++;
  if (totalScrollR === imageLengthR + 1) {
    clearInterval(autoScrollR);
    totalScrollR = 1;
    imageWrapperR.style.transition = "0s";
    imageWrapperR.style.left = "0";
    autoScrollR = setInterval(scrollingR, delayR);
  }
  const widthElR =
    imageWrapperR.querySelector("div:first-child").offsetWidth + 24;
  imageWrapperR.style.left = `${-totalScrollR * widthElR}px`;
  imageWrapperR.style.transition = ".3s";
}
