<?php
// booking-confirmation.php

// Display current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Booking confirmation message
echo '<h1>Booking Confirmation</h1>';
echo '<p>Your booking has been confirmed!</p>';
echo '<p>Current Date and Time (UTC): ' . $currentDateTime . '</p>';