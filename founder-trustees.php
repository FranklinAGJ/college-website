<?php
$current_page = 'founders';
$page_title = 'Founders & Trustees';
$site_description = "Learn about the visionary founders and dedicated trustees of SIWS College";

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

    <!-- Founders Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Our Founders</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">The visionaries who established South Indians' Welfare Society and SIWS College</p>
            </div>

            <div class="row mb-5">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="text-center pt-4">
                            <img src="../images/Shri N.R. Swamy.jpg" class="rounded-circle" alt="Shri N.R. Swamy"
                                style="width: 180px; height: 180px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Shri N.R. Swamy</h4>
                            <p class="text-muted">Founding President</p>
                            <p class="card-text">Migrated from a small village in South India to Bombay in 1929 at age
                                16, during the Great Depression. Starting as a Stenographer-Typist, he rose to head the
                                Global Venture Trading section by 1938. With his brother Shri N.S. Iyengar, he started a
                                Distribution/Agency company in 1944 with branches in UK, Bombay and Germany. He was a
                                Founder of Ultramarine & Pigments Ltd and Thirumalai Chemicals Ltd. Passionate about
                                education and empathetic to the poor, he was a Founder-Trustee of Thirumalai Charity
                                Trust and served on the Governing Council of SIWS School.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="text-center pt-4">
                            <img src="../images/Shri N.V. Sarma.png" class="rounded-circle" alt="Shri N.V. Sarma"
                                style="width: 180px; height: 180px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Shri N.V. Sarma</h4>
                            <p class="text-muted">Founder of SIWS School - 1934</p>
                            <p class="card-text">The founder of SIWS, South Indian's Welfare Society, who with a handful
                                of middle class persons established the Society on Christmas Day in 1933 and started a
                                primary school in a garage on July 4, 1934 at Shivaji Park, with just four students in
                                its roll. Two years later the primary school was established in Matunga and few years
                                later, Wadala became the principal area of the Society's activities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="text-center pt-4">
                            <img src="../images/Shri N.S. Iyengar.jpeg" class="rounded-circle" alt="Shri N.S. Iyengar"
                                style="width: 180px; height: 180px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Shri N.S. Iyengar</h4>
                            <p class="text-muted">Co-Founder</p>
                            <p class="card-text">A man with a vision, humility and gratitude. He had a sense of purpose
                                to bring up his family and had a sharp business acumen. A philanthropist who gave
                                generously to promote education and temples. He was a keen listener and lived life by
                                the values and ethics he spoke about. S.I.W.S. College was started in 1980 by Shri N.S.
                                Iyengar in memory of his beloved brother Shri N.R. Swamy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder's Journey Timeline -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Our Journey</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">The evolution of SIWS College through the decades</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Timeline -->
                    <div class="timeline">
                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">1937</div>
                                        <h4 class="ms-3 mb-0">Establishment of SIWS</h4>
                                    </div>
                                    <p>South Indians' Welfare Society was established by Shri N.R. Swamy and a group of
                                        dedicated South Indians in Mumbai with the aim to promote education and social
                                        welfare.</p>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">1950</div>
                                        <h4 class="ms-3 mb-0">First Educational Institution</h4>
                                    </div>
                                    <p>SIWS established its first educational institution, a primary school to serve the
                                        educational needs of the South Indian community in Mumbai.</p>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">1980</div>
                                        <h4 class="ms-3 mb-0">Commerce & Economics College</h4>
                                    </div>
                                    <p>S.I.W.S. N.R. Swamy College of Commerce & Economics was established to provide
                                        higher education opportunities in commerce and business studies.</p>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">1990</div>
                                        <h4 class="ms-3 mb-0">Science College</h4>
                                    </div>
                                    <p>Smt. Thirumalai College of Science was established to expand educational
                                        offerings into scientific disciplines and research.</p>
                                </div>
                            </div>
                        </div>



                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.6s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">2023</div>
                                        <h4 class="ms-3 mb-0">Autonomous Status</h4>
                                    </div>
                                    <p>SIWS College was granted autonomous status, allowing greater flexibility in
                                        curriculum design and academic governance.</p>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item animate-on-scroll fade-in-element" style="transition-delay: 0.7s;">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-badge bg-primary text-white">2023</div>
                                        <h4 class="ms-3 mb-0">Autonomous Status & NAAC 'A' Grade</h4>
                                    </div>
                                    <p>SIWS College was granted autonomous status and re-accredited with NAAC 'A' Grade
                                        with 3.15 CGPA in the 3rd Cycle of NAAC. Our institution was re-accredited for
                                        the third consecutive five-year period (Cycle 3) in 2023.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Vision & Mission Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Our Vision</h3>
                            <div class="heading-underline mb-4"></div>
                            <p class="card-text">To continually strive to respond to realities and social changes
                                through knowledge empowerment. This is achieved through the Motto of SIWS 'Vidya Dhanam
                                Sarva Dhanat Pradhanam'.</p>
                            <p class="card-text">We aim to be a premier educational institution that nurtures
                                intellectual growth, fosters innovation, and produces socially responsible citizens who
                                contribute meaningfully to society and the nation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Our Mission</h3>
                            <div class="heading-underline mb-4"></div>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> To provide
                                    quality education that empowers students with knowledge and skills</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> To foster a
                                    culture of academic excellence and continuous improvement</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> To promote
                                    research, innovation, and intellectual growth</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> To develop
                                    socially responsible citizens with strong ethical values</li>
                                <li class="mb-3"><i class="fas fa-check-circle text-primary me-2"></i> To create an
                                    inclusive environment that celebrates diversity</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Add CSS for Timeline -->
<style>
    .timeline {
        position: relative;
        padding: 20px 0;
    }

    .timeline:before {
        content: '';
        position: absolute;
        height: 100%;
        width: 4px;
        background: #3498db;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }

    .timeline-item {
        margin-bottom: 30px;
        position: relative;
    }

    .timeline-badge {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .timeline:before {
            left: 30px;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>