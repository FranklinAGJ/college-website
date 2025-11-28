<?php
$current_page = 'programs';
$page_title = 'Our Programs';
$site_description = "Explore our undergraduate, postgraduate, and diploma programs";

// Include shared header
include '../includes/header.php';

// Programs offered based on SIWS College website
$programs = [
    [
        'title' => 'Bachelor of Management Studies (BMS)',
        'description' => 'AICTE approved program focusing on management principles, business strategy, marketing, finance, and human resources with industry-focused curriculum.',
        'link' => '#',
        'image' => 'bms.png'
    ],
    [
        'title' => 'B.Com. (Management Studies)',
        'description' => 'Specialized program in commerce with focus on management studies and marketing, preparing students for careers in business management.',
        'link' => '#',
        'image' => 'bcom.jpg'
    ],
    [
        'title' => 'B.Sc. (Information Technology)',
        'description' => 'Technical program covering programming, database management, networking, web development, and emerging technologies.',
        'link' => '#',
        'image' => 'bscit.jpg'
    ],
    [
        'title' => 'B.Sc. (Computer Science)',
        'description' => 'Comprehensive program in computer science fundamentals, algorithms, data structures, software development, and computing technologies.',
        'link' => '#',
        'image' => 'bsccs.jpg'
    ]
];
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

    <!-- Programs Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center animate-on-scroll slide-up-element">
                    <h2 class="mb-3">Academic Excellence</h2>
                    <div class="heading-underline mx-auto"></div>
                    <p class="lead mt-4">SIWS College offers a wide range of undergraduate, postgraduate, and diploma
                        programs designed to prepare students for successful careers and further academic pursuits.</p>
                    <p>Our curriculum is regularly updated to reflect industry needs and academic advancements, ensuring
                        that our graduates are well-equipped for the challenges of the modern workplace.</p>
                </div>
            </div>

            <!-- Programs List -->
            <div class="row">
                <?php $delay = 0.1;
                foreach ($programs as $program): ?>
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 shadow-sm animate-on-scroll fade-in-element"
                            style="transition-delay: <?php echo $delay; ?>s;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-container h-100">
                                        <img src="../images/<?php echo $program['image']; ?>" class="img-fluid h-100 w-100"
                                            alt="<?php echo $program['title']; ?>" style="object-fit: cover;">
                                        <div class="program-overlay">
                                            <div class="program-icon">
                                                <i class="fas fa-graduation-cap fa-2x text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column h-100">
                                        <h5 class="card-title"><?php echo $program['title']; ?></h5>
                                        <p class="card-text flex-grow-1"><?php echo $program['description']; ?></p>
                                        <a href="<?php echo $program['link']; ?>" class="btn btn-primary mt-2">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 0.1; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Academic Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Academic Features</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">What makes SIWS College's academic programs stand out</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-book fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Comprehensive Curriculum</h5>
                            <p class="card-text">Our programs feature a well-rounded curriculum that balances
                                theoretical knowledge with practical applications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-flask fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Modern Laboratories</h5>
                            <p class="card-text">State-of-the-art laboratories for science, computer science, and other
                                technical subjects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.3s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Industry Connections</h5>
                            <p class="card-text">Strong ties with industry partners for internships, guest lectures, and
                                placement opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.4s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Experienced Faculty</h5>
                            <p class="card-text">Learn from experienced professors with strong academic backgrounds and
                                industry experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.5s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-laptop fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Digital Learning</h5>
                            <p class="card-text">Access to digital learning resources, online libraries, and e-learning
                                platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.6s;">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-globe fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title">Global Perspective</h5>
                            <p class="card-text">Curriculum designed with a global perspective to prepare students for
                                international opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission CTA -->
    <section class="py-5 parallax"
        style="background-image: url('../images/graduation-ceremony.jpg'); background-size: cover; position: relative;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(44, 62, 80, 0.85);">
        </div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white animate-on-scroll slide-up-element">
                    <h2 class="mb-4 fw-bold">Ready to Apply?</h2>
                    <div class="heading-underline mx-auto bg-white"></div>
                    <p class="lead my-4">Take the first step towards your future career by applying to one of our
                        programs.</p>
                    <a href="admission.php" class="btn btn-primary btn-lg px-4 py-2">Apply Now <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>