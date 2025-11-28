<?php
// Configuration
$site_title = "SIWS College";
$page_title = "Library";
$current_year = date('Y');

// College information
$college_info = [
    'name' => 'SIWS College',
    'phone' => '(555) 123-4567',
    'email' => 'info@siwscollege.edu'
];

// Library features
$library_features = [
    [
        'title' => 'Extensive Collection',
        'description' => 'Explore thousands of books, journals, e-books, and digital resources across various disciplines.',
        'icon' => '📚'
    ],
    [
        'title' => 'Study Zones',
        'description' => 'Enjoy dedicated study areas, including quiet study rooms, group collaboration spaces, and multimedia labs.',
        'icon' => '🏛️'
    ],
    [
        'title' => 'Digital Access',
        'description' => 'Access online databases, e-journals, and academic articles from anywhere, anytime.',
        'icon' => '💻'
    ],
    [
        'title' => 'Research Support',
        'description' => 'Our librarians are here to assist you with research projects, citation help, and finding the right resources.',
        'icon' => '🔍'
    ],
    [
        'title' => 'Events and Workshops',
        'description' => 'Participate in workshops, seminars, and events to enhance your learning experience.',
        'icon' => '🎓'
    ],
    [
        'title' => 'Multimedia Center',
        'description' => 'Access audio-visual materials, presentation rooms, and multimedia production facilities.',
        'icon' => '🎬'
    ]
];

// Library statistics
$library_stats = [
    ['number' => '50,000+', 'label' => 'Books'],
    ['number' => '2,000+', 'label' => 'Journals'],
    ['number' => '15,000+', 'label' => 'E-books'],
    ['number' => '500+', 'label' => 'Study Seats']
];

// Library hours
$library_hours = [
    'Monday - Friday' => '8:00 AM - 10:00 PM',
    'Saturday' => '9:00 AM - 8:00 PM',
    'Sunday' => '10:00 AM - 6:00 PM'
];

// Theme
$theme = [
    'primary_color' => '#2c3e50',
    'secondary_color' => '#e74c3c',
    'accent_color' => '#3498db'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - <?php echo $site_title; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar {
            background-color: <?php echo $theme['primary_color']; ?> !important;
        }
        
        .hero-section {
            background: linear-gradient(135deg, <?php echo $theme['primary_color']; ?>, <?php echo $theme['secondary_color']; ?>);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: <?php echo $theme['secondary_color']; ?>;
        }
        
        .hours-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .hours-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #dee2e6;
        }
        
        .hours-item:last-child {
            border-bottom: none;
        }
        
        .btn-primary {
            background-color: <?php echo $theme['secondary_color']; ?>;
            border-color: <?php echo $theme['secondary_color']; ?>;
        }
        
        .btn-primary:hover {
            background-color: <?php echo $theme['accent_color']; ?>;
            border-color: <?php echo $theme['accent_color']; ?>;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <h3 class="mb-0"><?php echo $college_info['name']; ?></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#admissions">Admissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-4">Welcome to <?php echo $college_info['name']; ?> Library</h1>
            <p class="lead">Your gateway to knowledge and academic excellence</p>
            <a href="#features" class="btn btn-primary btn-lg">Explore Our Services</a>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($library_stats as $stat): ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="stat-card">
                            <div class="stat-number"><?php echo $stat['number']; ?></div>
                            <div class="stat-label"><?php echo $stat['label']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Library Features & Services</h2>
            <div class="row">
                <?php foreach ($library_features as $feature): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <span class="feature-icon"><?php echo $feature['icon']; ?></span>
                                <h5 class="card-title"><?php echo $feature['title']; ?></h5>
                                <p class="card-text"><?php echo $feature['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Library Hours Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">About Our Library</h2>
                    <p>Our state-of-the-art library is designed to support your academic journey with modern facilities, extensive resources, and expert assistance. Whether you're conducting research, studying for exams, or working on group projects, our library provides the perfect environment for learning and discovery.</p>
                    
                    <h4 class="mt-4">Services Include:</h4>
                    <ul>
                        <li>Book borrowing and returns</li>
                        <li>Research assistance</li>
                        <li>Computer and internet access</li>
                        <li>Printing and scanning services</li>
                        <li>Study room reservations</li>
                        <li>Academic writing support</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="hours-card">
                        <h4 class="mb-3">Library Hours</h4>
                        <?php foreach ($library_hours as $day => $hours): ?>
                            <div class="hours-item">
                                <span><strong><?php echo $day; ?></strong></span>
                                <span><?php echo $hours; ?></span>
                            </div>
                        <?php endforeach; ?>
                        
                        <div class="mt-4">
                            <p><strong>Contact:</strong></p>
                            <p>📞 <?php echo $college_info['phone']; ?></p>
                            <p>✉️ library@siwscollege.edu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo $college_info['name']; ?></h5>
                    <p>Empowering minds, shaping futures, building tomorrow's leaders.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; <?php echo $current_year; ?> <?php echo $college_info['name']; ?>. All rights reserved.</p>
                    <div class="footer-links">
                        <a href="privacy.php" class="text-white me-3">Privacy Policy</a>
                        <a href="terms.php" class="text-white me-3">Terms of Service</a>
                        <a href="accessibility.php" class="text-white">Accessibility</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
