<?php
$current_page = 'home';
$page_title = 'Home';
$site_description = "Empowering minds, shaping futures, building tomorrow's leaders through quality education and holistic development";

// Include shared header
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section id="hero" class="hero-section d-flex align-items-center" style="height: 100vh;">
        <div class="container text-center text-white">
            <div class="fade-in">
                <h1 class="display-3 fw-bold mb-4">Welcome to <?php echo $college_info['short_name']; ?></h1>
                <p class="lead mb-5 fs-4"><?php echo $site_description; ?></p>
                <div class="hero-buttons">
                    <a href="pages/programs.php" class="btn btn-primary btn-lg me-3 px-4 py-2">Explore Programs</a>
                    <a href="pages/admission.php" class="btn btn-outline-light btn-lg px-4 py-2">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#overview" class="scroll-down-link">
                <i class="fas fa-chevron-down fa-2x bounce"></i>
            </a>
        </div>
    </section>

    <!-- Quick Overview Section -->
    <section id="overview" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center animate-on-scroll slide-up-element">
                    <h2 class="mb-4">Excellence in Education Since 1980</h2>
                    <p class="lead mb-4">SIWS College is an autonomous institution established in 1980 (Commerce &
                        Economics) and 1990 (Science), offering quality education with NAAC A Grade accreditation and
                        3.15 CGPA.</p>
                    <div class="row mt-5">
                        <div class="col-md-3 mb-3">
                            <div class="text-center animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                                <div class="icon-box rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-4"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                                </div>
                                <h4 class="counter-wrapper"><span class="counter">40</span>+ Years</h4>
                                <p>of Educational Excellence</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                                <div class="icon-box rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-4"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-award fa-2x text-primary"></i>
                                </div>
                                <h4>NAAC A Grade</h4>
                                <p>with <span class="counter">3.15</span> CGPA</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                                <div class="icon-box rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-4"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <h4>Autonomous</h4>
                                <p>Status College</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="text-center animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                                <div class="icon-box rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-4"
                                    style="width: 80px; height: 80px;">
                                    <i class="fas fa-building fa-2x text-primary"></i>
                                </div>
                                <h4><span class="counter">15</span>+ Facilities</h4>
                                <p>Modern Campus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section id="quick-links" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Quick Access</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Navigate to key sections of our website</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 text-center shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.1s;">
                        <div class="card-body d-flex flex-column">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-info-circle fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">About Us</h5>
                            <p class="card-text flex-grow-1">Learn about our history, mission, and values</p>
                            <a href="pages/about-us.php" class="btn btn-primary mt-3">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 text-center shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.2s;">
                        <div class="card-body d-flex flex-column">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-book fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Programs</h5>
                            <p class="card-text flex-grow-1">Explore our undergraduate and postgraduate programs</p>
                            <a href="pages/programs.php" class="btn btn-primary mt-3">View Programs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 text-center shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.3s;">
                        <div class="card-body d-flex flex-column">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-file-alt fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Admissions</h5>
                            <p class="card-text flex-grow-1">Start your application process today</p>
                            <a href="pages/admission.php" class="btn btn-primary mt-3">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 text-center shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.4s;">
                        <div class="card-body d-flex flex-column">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-phone fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Contact</h5>
                            <p class="card-text flex-grow-1">Get in touch with us for any queries</p>
                            <a href="pages/contact.php" class="btn btn-primary mt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Announcements -->
    <section id="news" class="py-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Latest News & Announcements</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Stay updated with the latest happenings at SIWS College</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card news-card mb-3 shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.1s;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary px-3 py-2 rounded-pill">Admissions</span>
                                <small class="text-muted">May 15, 2024</small>
                            </div>
                            <h5 class="card-title">Admission Open for Academic Year 2024-25</h5>
                            <p class="card-text">Applications are now open for our undergraduate and postgraduate
                                programs including BMS (AICTE approved), B.Com specializations, B.Sc IT, B.Sc CS, and
                                M.Com programs.</p>
                            <a href="pages/admission.php" class="btn btn-sm btn-outline-primary">Learn More <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="card news-card mb-3 shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.2s;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-success px-3 py-2 rounded-pill">Achievement</span>
                                <small class="text-muted">December 20, 2023</small>
                            </div>
                            <h5 class="card-title">NAAC Re-accreditation with A Grade</h5>
                            <p class="card-text">SIWS College has been re-accredited with NAAC A Grade with 3.15 CGPA,
                                reflecting our commitment to quality education.</p>
                            <a href="pages/about-us.php" class="btn btn-sm btn-outline-primary">Learn More <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="card news-card mb-3 shadow-sm animate-on-scroll fade-in-element"
                        style="transition-delay: 0.3s;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-info px-3 py-2 rounded-pill">Events</span>
                                <small class="text-muted">November 10, 2023</small>
                            </div>
                            <h5 class="card-title">Annual Cultural Festival</h5>
                            <p class="card-text">Join us for our annual cultural festival featuring performances,
                                competitions, and exhibitions showcasing student talent.</p>
                            <a href="pages/news-events.php" class="btn btn-sm btn-outline-primary">Learn More <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-calendar-alt me-2"></i> Important Dates</h5>
                        </div>
                        <img src="images/announcements.png" class="card-img-top" alt="Announcements">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-file-alt text-primary me-2"></i> Application Deadline</span>
                                    <span class="badge bg-primary rounded-pill">March 31, 2024</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-edit text-primary me-2"></i> Entrance Test</span>
                                    <span class="badge bg-primary rounded-pill">April 15, 2024</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-clipboard-check text-primary me-2"></i> Results</span>
                                    <span class="badge bg-primary rounded-pill">May 1, 2024</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-university text-primary me-2"></i> Classes Begin</span>
                                    <span class="badge bg-primary rounded-pill">June 15, 2024</span>
                                </li>
                            </ul>
                            <div class="text-center mt-3">
                                <a href="pages/admission.php" class="btn btn-primary">Apply Now <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus Life -->
    <section id="campus-life" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Campus Life</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Experience our vibrant campus environment</p>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-img-overlay-wrapper overflow-hidden">
                            <img src="images/Library.jpg" class="card-img-top" alt="Library">
                            <div class="card-img-overlay d-flex align-items-end p-0">
                                <div class="overlay-gradient w-100 p-3">
                                    <h5 class="text-white mb-0">Modern Library</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Our well-stocked library offers a vast collection of books, journals,
                                and digital resources for academic excellence.</p>
                            <a href="pages/library.php" class="btn btn-sm btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-img-overlay-wrapper overflow-hidden">
                            <img src="images/lab.jpeg" class="card-img-top" alt="Computer Lab">
                            <div class="card-img-overlay d-flex align-items-end p-0">
                                <div class="overlay-gradient w-100 p-3">
                                    <h5 class="text-white mb-0">Computer Labs</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">State-of-the-art computer labs with the latest software and high-speed
                                internet for practical learning.</p>
                            <a href="pages/computer-science.php" class="btn btn-sm btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card-img-overlay-wrapper overflow-hidden">
                            <img src="images/campus-courtyard.jpg" class="card-img-top" alt="Campus Courtyard">
                            <div class="card-img-overlay d-flex align-items-end p-0">
                                <div class="overlay-gradient w-100 p-3">
                                    <h5 class="text-white mb-0">Campus Courtyard</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Beautiful open spaces for students to relax, study, and socialize in a
                                vibrant campus environment.</p>
                            <a href="pages/about-us.php" class="btn btn-sm btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>