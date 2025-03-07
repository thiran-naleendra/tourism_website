<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/varaus/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Mar 2025 03:13:51 GMT -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <!-- Page Title -->
    <title>Varaus - Hotel Booking HTML5 Template</title>
    <!-- Icon fonts -->
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header" class="site-header header-style-2">
            <nav class="navigation navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <?php include 'nav.php' ?>
                    </div><!-- end of nav-collapse -->

                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Contact Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- contact-area start -->
        <div id="Contact" class="contact-area section-padding">
            <div class="container">
                <div class="wpo-contact-info">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="info-item">
                                <div class="info-wrap">
                                    <div class="info-icon">
                                        <i class="fi flaticon-internet"></i>
                                    </div>
                                    <div class="info-text">
                                        <span>Hotel Address</span>
                                    </div>
                                </div>
                                <h2>25 North Street,Dubai</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="info-item">
                                <div class="info-wrap">
                                    <div class="info-icon">
                                        <i class="fi flaticon-email"></i>
                                    </div>
                                    <div class="info-text">
                                        <span>Official Mail</span>
                                    </div>
                                </div>
                                <h2>info@varaus.com</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="info-item">
                                <div class="info-wrap">
                                    <div class="info-icon">
                                        <i class="fi flaticon-null-1"></i>
                                    </div>
                                    <div class="info-text">
                                        <span>Official Phone</span>
                                    </div>
                                </div>
                                <h2>+91 256-987-239</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-content">
                    <h2>Book a Taxi</h2>
                    <div class="contact-form">
                        <form method="post" class="contact-validation-active" id="contact-form">
                            <!-- Name -->
                            <div class="half-col">
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name*" required>
                            </div>
                            <div class="half-col">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name*" required>
                            </div>

                            <!-- Email -->
                            <div class="half-col">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address*" required>
                            </div>

                            <!-- Contact Number -->
                            <div class="half-col">
                                <input type="text" name="contactno" id="contactno" class="form-control" placeholder="Contact Number*" required>
                            </div>

                            <!-- Number of Passengers -->
                            <div class="half-col">
                                <input type="number" name="no_of_passengers" id="no_of_passengers" class="form-control" placeholder="Number of Passengers*" required>
                            </div>

                            <!-- Number of Kids -->
                            <div class="half-col">
                                <input type="number" name="no_of_kids" id="no_of_kids" class="form-control" placeholder="Number of Kids" required>
                            </div>

                            <!-- Where to Go (Destination) -->
                            <div>
                                <input type="text" name="destination" id="destination" class="form-control" placeholder="Where to Go*" required>
                            </div>

                            <!-- Date -->
                            <div>
                                <input type="date" name="date" id="date" class="form-control" placeholder="Pick-up Date*" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="submit-btn-wrapper">
                                <button type="submit" class="theme-btn-s2">Book Taxi</button>
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>

                            <!-- Success/Error Handling -->
                            <div class="clearfix error-handling-messages">
                                <div id="success">Your taxi booking has been received. We will contact you shortly.</div>
                                <div id="error">An error occurred while submitting your request. Please try again later.</div>
                            </div>
                        </form>
                    </div>
                </div>



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





                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area end -->
    <!-- start wpo-site-footer -->
    <?php include 'footer.php' ?>
    <!-- end wpo-site-footer -->
    </div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/varaus/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Mar 2025 03:13:51 GMT -->

</html>