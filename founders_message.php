<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Founder’s Message</title>
    <style>
        /* Internal CSS */
        body { background: #f8f9fa; font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; }
        nav ul { list-style: none; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; cursor: pointer; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .message { background: #e9ecef; padding: 40px; border-radius: 10px; text-align: center; }
        .message h2 { color: #28a745; }
        footer { background: #007bff; color: white; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0; }
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
        <section class="message">
            <h2>Founder’s Message</h2>
            <p>We are educating the students based on my life’s experiences of travel, business, and networking. This curriculum will keep evolving based on the new technologies that arrive every year, but will be very focused on becoming global citizens of the world, being able to see ourselves in the mirrors as one in 8 billion unique creation and seeing everyone else as equal to ourselves. Our core value is a Focus on life mission of positively impacting 10 million human beings.</p>
            <p>- Rehan Allahwala</p>
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
