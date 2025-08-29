<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <style>
        /* Internal CSS - Amazing fonts: Poppins for headings, Roboto for body */
        body { background: #f8f9fa; font-family: 'Roboto', sans-serif; color: #333; margin: 0; padding: 0; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; }
        h1, h2, h3 { font-family: 'Poppins', sans-serif; }
        nav ul { list-style: none; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: 600; cursor: pointer; font-family: 'Poppins', sans-serif; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .intro { text-align: center; background: #e9ecef; padding: 40px; border-radius: 10px; }
        .features { display: flex; justify-content: space-around; flex-wrap: wrap; }
        .feature-card { background: #ffffff; border: 1px solid #dee2e6; border-radius: 10px; padding: 20px; margin: 10px; width: 30%; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .feature-card h3 { color: #28a745; }
        .contact-info { text-align: center; margin-top: 40px; }
        .social-links a { margin: 0 10px; color: #007bff; text-decoration: none; font-family: 'Roboto', sans-serif; }
        footer { background: #007bff; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; font-family: 'Roboto', sans-serif; }
        /* Responsive design */
        @media (max-width: 768px) { .feature-card { width: 100%; } nav ul { flex-direction: column; } }
    </style>
</head>
<body>
    <header>
        <h1>Rehan Education</h1>
        <nav>
            <ul>
                <li><a onclick="redirectTo('index.php')">Home</a></li>
                <li><a onclick="redirectTo('curriculum.php')">Curriculum</a></li>
                <li><a onclick="redirectTo('courses.php')">Courses</a></li>
                <li><a onclick="redirectTo('facilitators.php')">Facilitators</a></li>
                <li><a onclick="redirectTo('founders_message.php')">Founder’s Message</a></li>
                <li><a onclick="redirectTo('contact.php')">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section class="intro">
            <h2>Digital Mastery for a Connected World</h2>
            <p>Tailored for teens to unleash their digital potential. Empower students to positively impact 10 million lives and achieve financial independence through AI-enabled education.</p>
        </section>
        <section class="features">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>First AI-enabled school integrating advanced tools like ChatGPT for personalized learning.</p>
            </div>
            <div class="feature-card">
                <h3>Digital Skills Acquisition</h3>
                <p>Focus on graphic design, video making, freelancing, and more to earn while learning.</p>
            </div>
            <div class="feature-card">
                <h3>Online Teaching Proficiency</h3>
                <p>Train in online methodologies, networking, and entrepreneurship for global impact.</p>
            </div>
        </section>
        <section class="contact-info">
            <h3>Contact Information</h3>
            <p>Call/WhatsApp: +44 7418 359852</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
                <a href="https://x.com" target="_blank">Twitter/X</a>
            </div>
        </section>
    </div>
    <footer>&copy; 2025 Rehan Education Clone</footer>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
