<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize an empty array to store any error messages
    $errors = [];

    // Validate and sanitize the form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $topic = $_POST['topic'] ?? '';

    // Check for any empty fields
    if (empty($name)) {
        $errors[] = 'Please enter your name.';
    }
    if (empty($email)) {
        $errors[] = 'Please enter your email address.';
    }
    if (empty($phone)) {
        $errors[] = 'Please enter your phone number.';
    }
    if (empty($topic)) {
        $errors[] = 'Please enter the topic.';
    }

    // If there are no errors, display the registration details
    if (empty($errors)) {
        echo '<h2>Registration Successful!</h2>';
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Topic: $topic</p>";
    } else {
        // If there are errors, display them
        echo '<h2>Please correct the following errors:</h2>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    }
} else {
    // If the form hasn't been submitted, display an error message
    echo '<h2>Error: Invalid request method.</h2>';
}
?>
