<?php
$current_page = 'programs';
$page_title = 'Information Technology Program';
$site_description = "Bachelor of Science in Information Technology - SIWS College";

// Include shared header
include '../includes/header.php';

// Program details
$program_info = [
    'title' => 'Information Technology',
    'duration' => '3 Years',
    'degree' => 'Bachelor of Science in Information Technology (BSIT)',
    'description' => 'Our Information Technology program focuses on the practical application of technology to solve business problems. Students learn to design, implement, and maintain computer systems, networks, and databases while developing skills in project management, system analysis, and IT support.',
    'career_opportunities' => [
        'IT Support Specialist',
        'Network Administrator',
        'System Administrator',
        'Database Administrator',
        'IT Project Manager',
        'Cybersecurity Analyst',
        'Cloud Solutions Architect',
        'IT Consultant',
        'Help Desk Manager',
        'DevOps Engineer'
    ],
    'courses' => [
        'Introduction to Information Technology',
        'Computer Networks',
        'Database Management Systems',
        'System Administration',
        'Web Technologies',
        'Information Security',
        'Project Management',
        'Cloud Computing',
        'Network Security',
        'IT Service Management',
        'Enterprise Systems',
        'Mobile Technologies'
    ],
    'specializations' => [
        'Network Administration',
        'Cybersecurity',
        'Database Management',
        'Cloud Computing',
        'IT Project Management'
    ]
];

// Faculty
$faculty = [
    [
        'name' => 'Mrs. Suchita U. Revankar',
        'title' => 'Program Director',
        'specialization' => 'Electronics & Information Technology',
        'experience' => '25+ years of teaching experience'
    ],
    [
        'name' => 'B. VirginMary Fernando',
        'title' => 'Senior Lecturer',
        'specialization' => 'Information Technology & Soft Computing',
        'experience' => 'MH. SET, UGC NET qualified'
    ],
    [
        'name' => 'Ms. Muskaan Kursija',
        'title' => 'Assistant Professor',
        'specialization' => 'Information Technology',
        'experience' => '16 years of teaching experience'
    ],
    [
        'name' => 'Mrs. Ruhi Prajal Ghogle',
        'title' => 'Lecturer',
        'specialization' => 'Data Science & Data Visualization',
        'experience' => 'M.Sc. in Information Technology, B.Ed.'
    ]
];

// Lab facilities
$lab_facilities = [
    'Networking Lab with Cisco Equipment',
    'Cybersecurity Lab with Penetration Testing Tools',
    'Database Administration Lab',
    'Cloud Computing Lab (AWS, Azure, Google Cloud)',
    'System Administration Lab',
    'Mobile Development Lab'
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
                        <?php echo $program_info['duration']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="mb-4">Program Overview</h2>
                    <div class="heading-underline mb-4"></div>
                    <p class="lead"><?php echo $program_info['description']; ?></p>
                </div>
            </div>

            <!-- Specializations -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="mb-4">Specializations</h3>
                    <div class="row">
                        <?php foreach ($program_info['specializations'] as $specialization): ?>
                            <div class="col-md-4 col-sm-6 mb-3">
                                <div class="card bg-primary text-white text-center py-3 animate-on-scroll fade-in-element">
                                    <div class="card-body">
                                        <h5 class="mb-0"><?php echo $specialization; ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element">
                        <div class="card-body">
                            <h3 class="card-title mb-4"><i class="fas fa-laptop-code text-primary me-2"></i>Core Courses
                            </h3>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($program_info['courses'] as $course): ?>
                                    <li class="list-group-item d-flex align-items-center">
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
                            <ul class="list-group list-group-flush">
                                <?php foreach ($program_info['career_opportunities'] as $career): ?>
                                    <li class="list-group-item d-flex align-items-center">
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

    <!-- Lab Facilities -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Laboratory Facilities</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">State-of-the-art facilities for hands-on learning</p>
            </div>
            <div class="row">
                <?php $i = 0;
                foreach ($lab_facilities as $facility): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm animate-on-scroll fade-in-element"
                            style="transition-delay: <?php echo $i * 0.1; ?>s;">
                            <div class="card-body">
                                <div class="icon-circle mb-4 mx-auto">
                                    <i class="fas fa-server fa-2x text-primary"></i>
                                </div>
                                <h5 class="card-title text-center"><?php echo $facility; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
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
            <div class="row">
                <?php $delay = 0.1;
                foreach ($faculty as $member): ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm animate-on-scroll fade-in-element"
                            style="transition-delay: <?php echo $delay; ?>s;">
                            <div class="card-body text-center">
                                <div class="faculty-img mb-3">
                                    <?php
                                    $faculty_images = [
                                        'Mrs. Suchita U. Revankar' => '../images/students-studying.jpg',
                                        'B. VirginMary Fernando' => '../images/campus-library.jpg',
                                        'Ms. Muskaan Kursija' => '../images/computer-lab.jpg',
                                        'Mrs. Ruhi Prajal Ghogle' => '../images/campus-courtyard.jpg'
                                    ];
                                    $image = isset($faculty_images[$member['name']]) ? $faculty_images[$member['name']] : '../images/campus-entrance.jpg';
                                    ?>
                                    <img src="<?php echo $image; ?>" class="rounded-circle"
                                        alt="<?php echo $member['name']; ?>"
                                        style="width: 120px; height: 120px; object-fit: cover;">
                                </div>
                                <h5 class="card-title"><?php echo $member['name']; ?></h5>
                                <p class="text-muted"><?php echo $member['title']; ?></p>
                                <p class="card-text"><?php echo $member['specialization']; ?></p>
                                <small class="text-muted"><?php echo $member['experience']; ?></small>
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
                    <p class="lead my-4">Take the first step towards your future career by applying to our Information
                        Technology program.</p>
                    <a href="admission.php" class="btn btn-primary btn-lg px-4 py-2">Apply Now <i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>