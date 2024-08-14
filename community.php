<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsycheNet - Community</title>
    <link rel="stylesheet" href="assets/css/style_community.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="sidebar">
        <header>
            <div class="logo-container">
                <img src="images/Untitled-1.svg" alt="PsycheNet Logo" class="logo">
                <span class="team-name">PsycheNet</span>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="ai-therapist.php">AI Therapist</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="our-team.php">Our Team</a></li>
                <li><a href="login.php">Log in / Sign up</a></li>
            </ul>
        </nav>
    </div>

    <div id="main-content">
        <header>
            <!-- Optional: Header content here if needed -->
        </header>

        <main>
            <section class="chat">
                <div class="chat-container">
                    <div class="pinned-message">
                        <p>Welcome to the community chat! Follow the guidelines and be respectful.</p>
                    </div>
                    <!-- Messages will be appended here -->
                </div>
                <div class="chat-input">
                    <textarea id="message-input" placeholder="Type your message..."></textarea>
                    <button id="send-btn">Send</button>
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
    </div>

    <script src="assets/js/community.js"></script>
</body>
</html>
