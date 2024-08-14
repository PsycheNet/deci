// JavaScript for modals and buttons
const startSessionBtn = document.getElementById('start-session-btn');
const closeModalBtn = document.getElementById('close-modal-btn');
const closeSessionBtn = document.getElementById('close-session-btn');
const sessionModal = document.getElementById('session-modal');
const ratingModal = document.getElementById('rating-modal');
const submitRatingBtn = document.getElementById('submit-rating-btn');
const stars = document.querySelectorAll('.star');

document.addEventListener('DOMContentLoaded', () => {
    // Show the session modal when the page loads
    sessionModal.style.display = 'flex';

    startSessionBtn.addEventListener('click', () => {
        // Redirect to the chat page
        window.location.href = 'index.php';
    });

    closeModalBtn.addEventListener('click', () => {
        // Close the session modal
        sessionModal.style.display = 'none';
        // Show the close session button
        closeSessionBtn.style.display = 'block';
    });

    closeSessionBtn.addEventListener('click', () => {
        // Hide chat section and show rating modal
        document.querySelector('.chat').style.display = 'none';
        ratingModal.style.display = 'flex';
    });

    submitRatingBtn.addEventListener('click', () => {
        // Handle the rating submission (for demonstration, just log it)
        const rating = document.querySelector('.rating .star.selected');
        if (rating) {
            alert(`You rated: ${rating.getAttribute('data-value')} stars`);
        } else {
            alert('Please select a rating.');
        }
        ratingModal.style.display = 'none';
        // Optionally, redirect to another page or reset the session
    });

    stars.forEach(star => {
        star.addEventListener('click', () => {
            // Remove 'selected' class from all stars
            stars.forEach(s => s.classList.remove('selected'));
            // Add 'selected' class to clicked star
            star.classList.add('selected');
        });
    });
});
