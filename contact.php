<?php
$current_page = 'contact';
$page_title = 'Contact Us';
$site_description = "Get in touch with SIWS College";

// Include shared header
include '../includes/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3"><?php echo $page_title; ?></h1>
                    <div class="heading-underline mx-auto"></div>
                    <p class="lead mt-3"><?php echo $site_description; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                
                <!-- Left Column : Contact Info -->
                <div class="col-lg-6 animate-on-scroll slide-up-element h-100">
                    <h2 class="mb-3">Get In Touch</h2>
                    <div class="heading-underline mb-4"></div>
                    <p class="lead mb-4">We're here to help! Feel free to reach out to us with any questions or inquiries.</p>

                    <!-- Address -->
                    <div class="contact-card mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex">
                                <div class="contact-icon me-4">
                                    <div class="icon-circle">
                                        <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="card-title">Address</h5>
                                    <p class="card-text">S.I.W.S. College, Plot No. 337, Sewree Wadala Estate,<br>
                                        Major R. Parameshwaran Marg, Mumbai – 400 031</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-card mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex">
                                <div class="contact-icon me-4">
                                    <div class="icon-circle">
                                        <i class="fas fa-phone fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="card-title">Phone</h5>
                                    <p class="card-text"><?php echo $college_info['phone']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-card mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex">
                                <div class="contact-icon me-4">
                                    <div class="icon-circle">
                                        <i class="fas fa-envelope fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text">info@siws-college.edu</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="contact-card mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card shadow-sm h-100">
                            <div class="card-body d-flex">
                                <div class="contact-icon me-4">
                                    <div class="icon-circle">
                                        <i class="fas fa-clock fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="card-title">Office Hours</h5>
                                    <p class="card-text"><?php echo $college_info['office_hours']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column : Contact Form -->
                <div class="col-lg-6 animate-on-scroll slide-up-element h-100" style="transition-delay: 0.2s;">
                    <div class="card shadow-lg h-100">
                        <div class="card-header bg-primary text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-paper-plane me-2"></i> Send Us a Message</h4>
                        </div>
                        <div class="card-body p-4">
                            <form>
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <!-- Subject -->
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        <input type="text" class="form-control form-control-lg" id="subject" placeholder="Message subject" required>
                                    </div>
                                </div>
                                <!-- Message -->
                                <div class="mb-4">
                                    <label for="message" class="form-label">Message</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-comment"></i></span>
                                        <textarea class="form-control form-control-lg" id="message" rows="5" placeholder="Type your message here" required></textarea>
                                    </div>
                                </div>
                                <!-- Submit -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Our Location</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Find us on the map and visit our campus</p>
            </div>
            <div class="row">
                <div class="col-12 animate-on-scroll fade-in-element">
                    <div class="map-container shadow-lg rounded overflow-hidden">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.0064066615394!2d72.86242907596398!3d19.01001005474761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf2a0a5a0001%3A0x9f8b3a8c2e5e0e6!2sSIWS%20College!5e0!3m2!1sen!2sin!4v1690356789123!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="https://goo.gl/maps/Ld5Ld9Ld9Ld9Ld9L9" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-directions me-2"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Department Contacts -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Department Contacts</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Reach out to specific departments for specialized assistance</p>
            </div>
            <div class="row">
                <!-- Admissions -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-user-graduate me-2"></i> Admissions Office</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For admission inquiries, application status, and document verification.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> admissions@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 101)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Examination -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i> Examination Cell</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For exam schedules, results, mark sheets, and related queries.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> exams@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 102)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accounts -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-money-bill-wave me-2"></i> Accounts Department</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For fee payments, scholarships, and financial matters.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> accounts@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 103)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Placement -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-briefcase me-2"></i> Placement Cell</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For career guidance, internships, and placement opportunities.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> placements@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 104)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Library -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.5s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-book me-2"></i> Library</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For library membership, book loans, and digital resources.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> library@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 105)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- IT Support -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.6s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-laptop me-2"></i> IT Support</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">For technical support, login issues, and digital services.</p>
                            <hr>
                            <div class="contact-info">
                                <p><i class="fas fa-envelope text-primary me-2"></i> itsupport@siws-college.edu</p>
                                <p class="mb-0"><i class="fas fa-phone text-primary me-2"></i> +91-22-2414 2824 (Ext. 106)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 animate-on-scroll fade-in-element" style="transition-delay: 0.7s;">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-download me-2"></i> Download Contact Directory
                </a>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
