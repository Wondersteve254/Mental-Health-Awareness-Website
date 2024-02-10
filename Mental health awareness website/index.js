// Add click event listener to each button
const buttons = document.querySelectorAll("button");

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // Code to run when button is clicked
  });
});


const slider = document.querySelector('.slider');
const sliderItems = document.querySelectorAll('.slider-item');
let currentIndex = 0;

function slide() {
  sliderItems[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % sliderItems.length;
  sliderItems[currentIndex].classList.add('active');
  animateText();
}

function animateText() {
  const title = sliderItems[currentIndex].querySelector('.slider-title');
  const description = sliderItems[currentIndex].querySelector('.slider-description');
  title.style.transform = 'translateY(50%)';
  title.style.opacity = '0';
  description.style.transform = 'translateY(50%)';
  description.style.opacity = '0';
}
