<?php
$servername = "localhost";
$username = "root";     
$password = "";           
$database = "deci"; 

$con = new mysqli($servername, $username, $password, $database);
if (isset($_POST['submit'])) {
    $ip = 'UNKNOWN';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (filter_var($ip, FILTER_VALIDATE_IP) === false) {
        $ip = 'INVALID IP';
    }
   $text = $_POST['message'];
   $sql = "INSERT INTO `ip` (`ip`,`message`) VALUES ('$ip','$text')";
   $res = mysqli_query($con,$sql);
    if ($res) {
        $error = "<div class='alert-danger'>Error With Send Message Try Again</div>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsycheNet - Home</title>
    <link rel="stylesheet" href="assets/css/style_index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="preloader">
        <img src="images/Untitled-1.svg" alt="PsycheNet Logo" class="logo-large">
        <div class="loading">Loading...</div>
    </div>

    <div id="content">
        <header>
            <div class="logo-container">
                <img src="images/Untitled-1.svg" alt="PsycheNet Logo" class="logo">
                <span class="team-name">PsycheNet</span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="ai-therapist.php">Ai Therapist</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li><a href="community.php">Community</a></li>
                    <li><a href="our-team.php">Our Team</a></li>                    
                    <li><a href="" >Chill out</a></li>
                    <li><a href="" >scholarships guide</a></li>
                </ul>
            </nav>
            <div class="cta-buttons">
                <a href="join.php" class="cta-join">Join Us</a>
                <a href="hire.php" class="cta-hire">Log in</a>
            </div>
        </header>

        <main>
            <section class="hero-carousel">
                <div class="hero-slide">
                    <div class="hero-content">
                        <h1>Find Support During Your Final Exam Phase</h1>
                        <p>PsycheNet is here to help you manage stress and anxiety. Join our community for AI-driven therapy and support.</p>
                    </div>
                </div>
                <div class="hero-slide">
                    <div class="section-text">
                        <h2>AI Therapist</h2>
                        <p>Some description text for the first section.</p>
                    </div>
                </div>
                <!-- Add more slides as needed -->
                <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
            </section>
            

            <section class="image-text-section">
                <img src="images/1657307218470.png" alt="Section Image" class="section-image">
                <div class="section-text2">
                    <h2>Community</h2>
                    <p>Some description text for the second section.</p>
                </div>
            </section>
            <section class="image-text-section">
                <img src="images\robot-therapist-AI-sparling.jpg" alt="Section Image" class="section-image">
                <div class="section-text2">
                    <h2>Ai therapist</h2>
                    <p>Some description text for the second section.</p>
                </div>
            </section>

            <section class="image-text-section">
                <img src="images/work-schedules-header-banner.png" alt="Section Image" class="section-image">
                <div class="section-text2">
                    <h2>Scheduling</h2>
                    <p>Some description text for the third section.</p>
                </div>
            </section>

            <section class="about-us">
                <div class="about-content">
                    <h2>About PsycheNet</h2>
                    <p>PsycheNet is committed to supporting Egyptian high school students through their most stressful periods. Our platform offers tools, resources, and a community to ensure mental well-being.</p>
                </div>
            </section>
            
        </main>

        <footer>
            <div class="footer-content">
                <div class="footer-section footer-logo">
                    <img src="images/Untitled-1.svg" alt="PsycheNet Logo" class="footer-logo-img">
                    <p>Team Members:</p>
                    <ul>
                        <li>Sama</li>
                        <li>Pishoy</li>
                        <li>Fares</li>
                        <li>Taiam</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Website Dashboard</h3>
                    <ul>
                        <li><a href="ai-therapist.php">Ai Therapist</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="community.php">Community</a></li>
                        <li><a href="our-team.php">Our Team</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>About PsycheNet</h3>
                    <p>PsycheNet is designed to support students during their most stressful periods, offering AI-driven therapy, scheduling tools, and a supportive community.</p>
                </div>
                <div class="footer-section">
                    <h3>Send Us a Message</h3>
                    <form action="" method="post">
                        <textarea placeholder="Your message..." name="message"></textarea>
                        <button name="submit" type="submit">Send</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; 2024 PsycheNet. All rights reserved.</p>
                </div>
                <div class="social-icons">
                    <a href="#"><img src="images/whatsapp-white-icon.png" alt="WhatsApp"></a>
                    <a href="#"><img src="images/instagram-white-icon.webp" alt="Instagram"></a>
                    <a href="#"><img src="images/facebook-app-round-white-icon.webp" alt="Facebook"></a>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/index.js"></script>
</body>
</html>
