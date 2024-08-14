<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsycheNet - AI Therapist</title>
    <link rel="stylesheet" href="assets/css/style_ai_therapist.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/Untitled-1.svg" alt="PsycheNet Logo" class="logo">
            <span class="team-name">PsycheNet</span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="our-team.php">Our Team</a></li>
                <li><a href="login.php">Log in / Sign up</a></li>
                <li><button id="close-session-btn" style="display:none;">Close Session</button></li> <!-- Button to close session -->
            </ul>
        </nav>
    </header>

    <main>
        <section class="chat">
            <div class="chat-container">
                <div class="pinned-message">
                    <p>Welcome to the AI Therapist! Type your messages below and get support.</p>
                </div>
                <div id="chat-box"></div>
                <div class="chat-input">
                    <textarea id="message-input" placeholder="Type your message..."></textarea>
                    <button id="send-btn">Send</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-bottom">
            <p>&copy; 2024 PsycheNet. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><img src="images/whatsapp-white-icon.png" alt="WhatsApp"></a>
                <a href="#"><img src="images/instagram-white-icon.webp" alt="Instagram"></a>
                <a href="#"><img src="images/facebook-app-round-white-icon.webp" alt="Facebook"></a>
            </div>
        </div>
    </footer>

    <!-- Start New Session Modal -->
    <div id="session-modal" class="modal">
        <div class="modal-content">
            <button id="start-session-btn">Start a New Session</button>
            <button id="close-modal-btn">Close</button>
        </div>
    </div>

    <!-- Rating Modal -->
    <div id="rating-modal" class="modal">
        <div class="modal-content">
            <h2>Rate Your Experience</h2>
            <div class="rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
            </div>
            <button id="submit-rating-btn">Submit</button>
        </div>
    </div>

    <script src="assets/js/ai_therapist.js"></script>
</body>
</html>
