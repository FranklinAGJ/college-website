<?php
$current_page = 'about';
$page_title = 'About Us';
$site_description = "Learn about SIWS College's history, mission, and values";

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

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 animate-on-scroll slide-up-element">
                    <h2 class="mb-4">Our History</h2>
                    <div class="heading-underline mb-4"></div>
                    <p class="lead mb-4">S.I.W.S. Degree College in Commerce and Economics was established in 1980 and
                        Smt. Thirumalai College of Science in 1990.</p>

                    <p>The Vision of SIWS Colleges is to continually strive to respond to realities and social changes
                        through knowledge empowerment. This is achieved through the Motto of SIWS 'Vidya Dhanam Sarva
                        Dhanat Pradhanam'.</p>

                    <p>In pursuance of its Vision, SIWS is dedicated to produce socially responsible and intellectually
                        capable citizens of India. The campus has an environment of pluralism and cultural diversity
                        adapting to the emerging challenges of the evolving global community.</p>

                    <p>A plethora of activities are planned and executed through curricular, co-curricular and
                        extra-curricular activities to enable the students to be empowered with knowledge, life skills
                        and face the rapidly changing interconnected world. SIWS Colleges are "Autonomous" and have been
                        re-accredited with an 'A' Grade in the third cycle of NAAC.</p>

                    <div class="mt-4 mb-4">
                        <a href="founder-trustees.php" class="btn btn-primary">
                            <i class="fas fa-users me-2"></i> Learn About Our Founders & Trustees
                        </a>
                    </div>

                    <h2 class="mt-5 mb-4">Our Mission</h2>
                    <div class="heading-underline mb-4"></div>
                    <ul class="list-unstyled mission-list">
                        <li class="mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                            <div class="d-flex">
                                <div class="mission-icon me-3">
                                    <i class="fas fa-check-circle text-primary"></i>
                                </div>
                                <div>
                                    <h5>Quality Education</h5>
                                    <p>To provide quality education that empowers students with knowledge and skills</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                            <div class="d-flex">
                                <div class="mission-icon me-3">
                                    <i class="fas fa-check-circle text-primary"></i>
                                </div>
                                <div>
                                    <h5>Academic Excellence</h5>
                                    <p>To foster a culture of academic excellence and continuous improvement</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                            <div class="d-flex">
                                <div class="mission-icon me-3">
                                    <i class="fas fa-check-circle text-primary"></i>
                                </div>
                                <div>
                                    <h5>Research & Innovation</h5>
                                    <p>To promote research, innovation, and intellectual growth</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                            <div class="d-flex">
                                <div class="mission-icon me-3">
                                    <i class="fas fa-check-circle text-primary"></i>
                                </div>
                                <div>
                                    <h5>Social Responsibility</h5>
                                    <p>To develop socially responsible citizens with strong ethical values</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-4 animate-on-scroll fade-in-element" style="transition-delay: 0.5s;">
                            <div class="d-flex">
                                <div class="mission-icon me-3">
                                    <i class="fas fa-check-circle text-primary"></i>
                                </div>
                                <div>
                                    <h5>Inclusive Environment</h5>
                                    <p>To create an inclusive environment that celebrates diversity</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm animate-on-scroll fade-in-element">
                        <div class="card-img-overlay-wrapper overflow-hidden">
                            <img src="../images/principal-video-thumbnail.jpg" class="card-img-top"
                                alt="Principal's Message">
                            <div class="card-img-overlay d-flex align-items-end p-0">
                                <div class="overlay-gradient w-100 p-3">
                                    <h5 class="text-white mb-0">Principal's Message</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Welcome to SIWS College. Our institution is committed to providing
                                quality education and fostering an environment of academic excellence. We follow the
                                motto "Vidya Dhanam Sarva Dhanat Pradhanam" - knowledge empowerment for social
                                responsibility.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <!-- College Key Information -->
                    <div class="card shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Key Information</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>College Code:</strong>
                                    <span><?php echo $college_info['college_code']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>AISHE Code:</strong>
                                    <span><?php echo $college_info['aishe_code']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Status:</strong>
                                    <span><?php echo $college_info['autonomy_status']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>University:</strong>
                                    <span><?php echo $college_info['university_affiliation']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Management:</strong>
                                    <span><?php echo $college_info['management']; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Accreditation:</strong>
                                    <span class="badge bg-success">NAAC A Grade</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Why Choose SIWS College?</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Discover what sets us apart from other institutions</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-award fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Autonomous Status</h5>
                            <p class="card-text">Autonomous college with flexibility in curriculum design and academic
                                governance under University of Mumbai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-star fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">NAAC A Grade</h5>
                            <p class="card-text">Re-accredited with NAAC A Grade with 3.15 CGPA, ensuring quality
                                education standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-laptop fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Modern Facilities</h5>
                            <p class="card-text">State-of-the-art science labs, computer labs, library, gymkhana, and
                                student support facilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Experienced Faculty</h5>
                            <p class="card-text">Dedicated teaching faculty with industry experience and academic
                                excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.5s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-book-open fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Value-based Education</h5>
                            <p class="card-text">Following the motto "Vidya Dhanam Sarva Dhanat Pradhanam" - knowledge
                                empowerment for social responsibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.6s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-briefcase fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Placement Support</h5>
                            <p class="card-text">Career guidance and placement cell with connections to leading
                                companies and organizations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faculty Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Our Faculty</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Meet our dedicated teaching professionals</p>
            </div>

            <!-- Head of the Institution -->
            <h3 class="text-center mb-4">Head of the Institution</h3>
            <div class="row mb-5 justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/principal-video-thumbnail.jpg" class="rounded-circle"
                                    alt="Prof. (Dr.) Manali Manoj Londhe"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Prof. (Dr.) Manali Manoj Londhe</h5>
                            <p class="text-muted">Principal</p>
                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Computer Science & IT Faculty -->
            <h3 class="text-center mb-4">Computer Science & IT Faculty</h3>
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/Dr.NityashreeNadar.png" class="rounded-circle"
                                    alt="Dr. Nityashree Nadar" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Dr. Nityashree Nadar</h5>
                            <p class="text-muted">Computer Science Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/Mrs.SUCHITAU.REVANKAR.png" class="rounded-circle"
                                    alt="Mrs. Suchita U. Revankar"
                                    style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Mrs. Suchita U. Revankar</h5>
                            <p class="text-muted">Information Technology Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/B.VirginMaryFernando.png" class="rounded-circle"
                                    alt="B. VirginMary Fernando"
                                    style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">B. VirginMary Fernando</h5>
                            <p class="text-muted">Information Technology Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/Er.RSanthaMariaRani.png" class="rounded-circle"
                                    alt="Er. R Santha Maria Rani"
                                    style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Er. R Santha Maria Rani</h5>
                            <p class="text-muted">Computer Science Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.5s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/Ms.GayatriVenkatachalam.png" class="rounded-circle"
                                    alt="Ms. Gayatri Venkatachalam"
                                    style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Ms. Gayatri Venkatachalam</h5>
                            <p class="text-muted">Computer Science Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.6s;">
                        <div class="card-body text-center">
                            <div class="faculty-img mb-3">
                                <img src="../images/Tr.NikhilMamaniya.png" class="rounded-circle"
                                    alt="Tr. Nikhil Mamaniya" style="width: 120px; height: 120px; object-fit: cover;">
                            </div>
                            <h5 class="card-title">Tr. Nikhil Mamaniya</h5>
                            <p class="text-muted">Information Technology Department</p>

                            <div class="faculty-social mt-3">
                                <a href="#" class="btn btn-sm btn-outline-primary me-2"><i
                                        class="fas fa-envelope"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">View All Faculty Members</a>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>