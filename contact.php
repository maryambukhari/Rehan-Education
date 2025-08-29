<?php
include 'db.php'; // Include DB connection

// Handle form submission (pro level with prepared statements to prevent SQL injection)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Prepared statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $success = "Message sent successfully!";
    } else {
        $error = "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan Education - Contact</title>
    <style>
        /* Internal CSS */
        body { background: #f8f9fa; font-family: Arial, sans-serif; color: #333; margin: 0; padding: 0; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; }
        nav ul { list-style: none; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 15px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; cursor: pointer; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .contact-details { text-align: center; }
        form { max-width: 600px; margin: 20px auto; background: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #dee2e6; border-radius: 5px; }
        button { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #218838; }
        .success { color: #28a745; text-align: center; }
        .error { color: #dc3545; text-align: center; }
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
        <section class="contact-details">
            <h2>Contact Details</h2>
            <p>Address: Rehan School, Pakistan (Virtual Academy)</p>
            <p>Phone: +44 7418 359852 / +1 (850) 317-9620</p>
            <p>Email: info@rehan.education</p>
        </section>
        <form method="post">
            <h2>Send a Message</h2>
            <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <footer>&copy; 2025 Rehan Education Clone</footer>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>c
