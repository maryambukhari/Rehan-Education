<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Facilitators</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <style>
        /* Internal CSS - Poppins for headings, Roboto for body */
        body { background: #f8f9fa; font-family: 'Roboto', sans-serif; color: #333; margin: 0; padding: 0; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; }
        h1, h2, h3 { font-family: 'Poppins', sans-serif; }
        nav ul { list-style: none; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: 600; cursor: pointer; font-family: 'Poppins', sans-serif; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .facilitators { display: flex; flex-wrap: wrap; justify-content: space-around; }
        .facilitator { background: #ffffff; border: 1px solid #dee2e6; border-radius: 10px; padding: 20px; margin: 10px; width: 40%; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .facilitator h3 { color: #28a745; }
        .social { margin-top: 10px; }
        .social a { color: #007bff; margin-right: 10px; text-decoration: none; font-family: 'Roboto', sans-serif; }
        footer { background: #007bff; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; font-family: 'Roboto', sans-serif; }
        @media (max-width: 768px) { .facilitator { width: 100%; } nav ul { flex-direction: column; } }
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
        <h2>Our Facilitators</h2>
        <div class="facilitators">
            <div class="facilitator">
                <h3>Rehan Allahwala</h3>
                <p>Founder and visionary leader with experience in travel, business, and networking. Mission: End poverty through education.</p>
                <div class="social">
                    <a href="https://facebook.com/rehanallahwala" target="_blank">Facebook</a>
                    <a href="https://instagram.com/rehanallahwala" target="_blank">Instagram</a>
                    <a href="https://x.com/rehanallahwala" target="_blank">Twitter/X</a>
                </div>
            </div>
            <div class="facilitator">
                <h3>Doulat Educationalwala</h3>
                <p>Expert in digital education and AI tools, passionate about empowering students with cutting-edge skills for a connected world.</p>
                <div class="social">
                    <a href="https://facebook.com/doulateducationalwala" target="_blank">Facebook</a>
                    <a href="https://instagram.com/doulateducationalwala" target="_blank">Instagram</a>
                    <a href="https://x.com/doulateducationalwala" target="_blank">Twitter/X</a>
                </div>
            </div>
            <div class="facilitator">
                <h3>Jai Prakash Educational</h3>
                <p>Specialist in entrepreneurship and online teaching methodologies, guiding teens to achieve financial independence.</p>
                <div class="social">
                    <a href="https://facebook.com/jaiprakasheducational" target="_blank">Facebook</a>
                    <a href="https://instagram.com/jaiprakasheducational" target="_blank">Instagram</a>
                    <a href="https://x.com/jaiprakasheducational" target="_blank">Twitter/X</a>
                </div>
            </div>
        </div>
    </div>
    <footer>&copy; 2025 Rehan Education Clone</footer>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
