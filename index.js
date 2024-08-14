document.addEventListener('DOMContentLoaded', () => {
    const hidePreloader = () => {
        document.getElementById('preloader').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    };

    setTimeout(hidePreloader, 3000); // Adjust the delay as needed
});


let currentIndex = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.hero-slide');
    const totalSlides = slides.length;

    // Reset all slides
    slides.forEach(slide => slide.style.left = '100%');

    // Move the current slide into view
    slides[index].style.left = '0%';

    // Update index
    currentIndex = index;
}

function moveSlide(step) {
    const slides = document.querySelectorAll('.hero-slide');
    const totalSlides = slides.length;

    // Calculate the new index
    let newIndex = (currentIndex + step + totalSlides) % totalSlides;
    showSlide(newIndex);
}

// Initialize the carousel
showSlide(currentIndex);

