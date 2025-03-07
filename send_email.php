<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Get form data
                    $first_name = $_POST['fname'];
                    $last_name = $_POST['lname'];
                    $email = $_POST['email'];
                    $contact_no = $_POST['contactno'];
                    $no_of_passengers = $_POST['no_of_passengers'];
                    $no_of_kids = $_POST['no_of_kids'];
                    $destination = $_POST['destination'];
                    $date = $_POST['date'];

                    // Set recipient email address
                    $to = "wgthiran@example.com"; // Replace with your email address
                    $subject = "New Taxi Booking Request";

                    // Prepare the email body
                    $message = "
                                 <html>
                                    <head>
                                        <title>Taxi Booking Request</title>
                                    </head>
                                    <body>
                                        <h2>Taxi Booking Details</h2>
                                        <p><strong>First Name:</strong> $first_name</p>
                                        <p><strong>Last Name:</strong> $last_name</p>
                                        <p><strong>Email:</strong> $email</p>
                                        <p><strong>Contact Number:</strong> $contact_no</p>
                                        <p><strong>Number of Passengers:</strong> $no_of_passengers</p>
                                        <p><strong>Number of Kids:</strong> $no_of_kids</p>
                                        <p><strong>Destination:</strong> $destination</p>
                                        <p><strong>Date:</strong> $date</p>
                                    </body>
                                </html>
                                    ";

                    // Set headers
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
                    $headers .= "From: $email" . "\r\n";

                    // Send email
                    if (mail($to, $subject, $message, $headers)) {
                        echo "success";
                    } else {
                        echo "error";
                    }
                }
                ?>