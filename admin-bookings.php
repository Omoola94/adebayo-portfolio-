<?php
// admin-bookings.php

// Admin panel for managing DJ bookings

// Sample data structure to hold bookings
$bookings = [
    ['id' => 1, 'dj_name' => 'DJ Awesome', 'event_date' => '2026-04-15', 'client_name' => 'John Doe'],
    ['id' => 2, 'dj_name' => 'DJ Cool', 'event_date' => '2026-05-20', 'client_name' => 'Jane Smith']
];

// Function to display bookings
function displayBookings($bookings) {
    echo '<h1>DJ Bookings</h1>';
    echo '<table border="1"><tr><th>ID</th><th>DJ Name</th><th>Event Date</th><th>Client Name</th></tr>';
    foreach ($bookings as $booking) {
        echo '<tr>';
        echo '<td>' . $booking['id'] . '</td>';
        echo '<td>' . $booking['dj_name'] . '</td>';
        echo '<td>' . $booking['event_date'] . '</td>';
        echo '<td>' . $booking['client_name'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Call the function to display bookings
displayBookings($bookings);
?>