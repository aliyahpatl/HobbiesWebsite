const imageWrapperL = document.querySelector(".image-wrapperL");
const imageItemsL = document.querySelectorAll(".image-wrapperL > div");
const imageLengthL = imageItemsL.length;
const perViewL = 3;
let totalScrollL = 0;
const delayL = 1500; // Adjusted delay to make the scroll faster

imageWrapperL.style.setProperty("--per-view", perViewL);
for (let i = 0; i < perViewL; i++) {
  imageWrapperL.insertAdjacentHTML("beforeend", imageItemsL[i].innerHTML);
}

let autoScrollL = setInterval(scrollingL, delayL);

function scrollingL() {
  totalScrollL++;
  if (totalScrollL == imageLengthL + 1) {
    clearInterval(autoScrollL);
    totalScrollL = 1;
    imageWrapperL.style.transition = "0s";
    imageWrapperL.style.left = "0";
    autoScrollL = setInterval(scrollingL, delayL);
  }
  const widthElL =
    document.querySelector(".image-wrapperL > div:first-child").offsetWidth +
    24;
  imageWrapperL.style.left = `-${totalScrollL * widthElL}px`;
  imageWrapperL.style.transition = ".3s";
}
