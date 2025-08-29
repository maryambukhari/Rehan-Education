<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Curriculum</title>
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
        .overview { background: #e9ecef; padding: 20px; border-radius: 10px; }
        .levels { display: flex; flex-direction: column; }
        .level { background: #ffffff; border: 1px solid #dee2e6; border-radius: 10px; padding: 15px; margin: 10px 0; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .level h3 { color: #28a745; }
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
        <section class="overview">
            <h2>Curriculum Overview</h2>
            <p>Our innovative curriculum focuses on digital skills, AI proficiency, and online teaching methodologies. Based on life experiences, it evolves with new technologies, emphasizing global citizenship and positively impacting 10 million lives.</p>
        </section>
        <section class="levels">
            <div class="level">
                <h3>Level One (5th Grade)</h3>
                <p>Graphic design, ChatGPT, interview skills, video making, AI-assisted learning, yoga, meditation, ethics, TEDx.</p>
            </div>
            <div class="level">
                <h3>Level Two (6th Grade)</h3>
                <p>Continues Level One, adds life mission, TEDx talks, networking, freelancing to earn $100/month.</p>
            </div>
            <div class="level">
                <h3>Level Three (7th Grade)</h3>
                <p>All previous, aim to earn $300/month.</p>
            </div>
            <div class="level">
                <h3>Level Four (8th Grade)</h3>
                <p>All previous, start a startup related to life mission.</p>
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
