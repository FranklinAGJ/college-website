<?php
$current_page = 'programs';
$page_title = 'Computer Science Program';
$site_description = "Bachelor of Science in Computer Science - SIWS College";

// Include shared header
include '../includes/header.php';

// Program details
$program_info = [
    'title' => 'Computer Science',
    'duration' => '4 Years',
    'degree' => 'Bachelor of Science in Computer Science',
    'description' => 'Our Computer Science program provides students with a comprehensive foundation in programming, software development, data structures, algorithms, and emerging technologies. Students will gain hands-on experience through projects, internships, and collaborative research opportunities.',
    'career_opportunities' => [
        'Software Developer',
        'Data Scientist',
        'Web Developer',
        'Mobile App Developer',
        'Systems Analyst',
        'Database Administrator',
        'Cybersecurity Specialist',
        'AI/Machine Learning Engineer'
    ],
    'courses' => [
        'Introduction to Programming',
        'Data Structures and Algorithms',
        'Object-Oriented Programming',
        'Database Systems',
        'Web Development',
        'Mobile App Development',
        'Machine Learning',
        'Software Engineering',
        'Computer Networks',
        'Cybersecurity Fundamentals'
    ]
];

// Faculty
$faculty = [
    [
        'name' => 'Dr. Nityashree Nadar',
        'title' => 'Program Director',
        'specialization' => 'Information Security & Software Engineering',
        'experience' => '15+ years of teaching experience'
    ],
    [
        'name' => 'Mrs. Gayatri Venkatachalam',
        'title' => 'Senior Lecturer',
        'specialization' => 'Computer Science & Programming',
        'experience' => '9 years of teaching experience'
    ],
    [
        'name' => 'Mrs. Suchita U. Revankar',
        'title' => 'Assistant Professor',
        'specialization' => 'Electronics & Information Technology',
        'experience' => '25+ years of teaching experience'
    ]
];

// Program statistics
$program_stats = [
    ['number' => '95%', 'label' => 'Job Placement Rate'],
    ['number' => '₹12L', 'label' => 'Average Starting Salary'],
    ['number' => '200+', 'label' => 'Industry Partners'],
    ['number' => '1000+', 'label' => 'Alumni Network']
];
?>

<main>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3"><?php echo $program_info['title']; ?> Program</h1>
                    <div class="heading-underline mx-auto"></div>
                    <p class="lead mt-3"><?php echo $program_info['degree']; ?> | Duration:
                        <?php echo $program_info['duration']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($program_stats as $stat): ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card h-100 shadow-sm text-center py-4 animate-on-scroll fade-in-element">
                            <div class="card-body">
                                <h2 class="stat-number mb-2"><?php echo $stat['number']; ?></h2>
                                <p class="mb-0"><?php echo $stat['label']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-3">Program Overview</h2>
                    <div class="heading-underline mx-auto"></div>
                    <p class="lead mt-4"><?php echo $program_info['description']; ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element">
                        <div class="card-body">
                            <h3 class="card-title mb-4"><i class="fas fa-code text-primary me-2"></i>Core Courses</h3>
                            <ul class="list-unstyled">
                                <?php foreach ($program_info['courses'] as $course): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-primary me-2"></i>
                                        <?php echo $course; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                        <div class="card-body">
                            <h3 class="card-title mb-4"><i class="fas fa-briefcase text-primary me-2"></i>Career
                                Opportunities</h3>
                            <ul class="list-unstyled">
                                <?php foreach ($program_info['career_opportunities'] as $career): ?>
                                    <li class="mb-2">
                                        <i class="fas fa-arrow-right text-primary me-2"></i>
                                        <?php echo $career; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
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
                <h2 class="mb-3">Meet Our Faculty</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Learn from experienced professors with strong academic backgrounds</p>
            </div>
            <div class="row">
                <?php $delay = 0.1;
                foreach ($faculty as $member): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card faculty-card h-100 shadow-sm animate-on-scroll fade-in-element"
                            style="transition-delay: <?php echo $delay; ?>s;">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="../images/principal-video-thumbnail.jpg" class="rounded-circle" alt="Faculty"
                                        style="width: 120px; height: 120px; object-fit: cover;">
                                </div>
                                <h5 class="card-title text-center"><?php echo $member['name']; ?></h5>
                                <p class="card-subtitle mb-2 text-muted text-center"><?php echo $member['title']; ?></p>
                                <p class="card-text text-center"><?php echo $member['specialization']; ?></p>
                                <p class="text-muted text-center"><small><?php echo $member['experience']; ?></small></p>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 0.1; endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Apply Now CTA -->
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
                    <p class="lead my-4">Take the first step towards your future career by applying to our Computer
                        Science program.</p>
                    <a href="admission.php" class="btn btn-primary btn-lg px-4 py-2">Apply Now <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>