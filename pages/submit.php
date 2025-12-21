<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "knot_studio");

// Check connection
if (!$conn) {
    die("Database connection failed");
}

// Get form data
$full_name  = $_POST['full_name'];
$email      = $_POST['email'];
$contact    = $_POST['contact'];
$event_date = $_POST['event_date'];
$event_type = $_POST['event_type'];
$venue      = $_POST['venue'];

// Insert query
$sql = "INSERT INTO bookings 
(full_name, email, contact, event_date, event_type, venue)
VALUES 
('$full_name', '$email', '$contact', '$event_date', '$event_type', '$venue')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "<h2>Booking Submitted Successfully!</h2>";
    echo "<p>We will contact you soon.</p>";
    echo "<a href='booking.html'>Go Back</a>";
} else {
    echo "Error: Booking not saved.";
}

mysqli_close($conn);
?>
