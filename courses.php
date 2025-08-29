<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Courses</title>
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
        .courses-list { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .course { background: #ffffff; border: 1px solid #dee2e6; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .course h3 { color: #28a745; }
        footer { background: #007bff; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; font-family: 'Roboto', sans-serif; }
        @media (max-width: 768px) { nav ul { flex-direction: column; } }
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
        <h2>Our Courses</h2>
        <div class="courses-list">
            <div class="course">
                <h3>AI and Digital Skills</h3>
                <p>Learn ChatGPT, graphic design, video making for real-world application.</p>
            </div>
            <div class="course">
                <h3>Entrepreneurship</h3>
                <p>Startups, freelancing to earn $100-$500/month.</p>
            </div>
            <div class="course">
                <h3>Personal Development</h3>
                <p>Yoga, meditation, ethics, networking, TEDx talks.</p>
            </div>
            <div class="course">
                <h3>Global Citizenship</h3>
                <p>Life mission to impact 10 million lives.</p>
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
