<?php
// Configuration
$site_title = "SIWS College";
$page_title = "News & Events";
$current_year = date('Y');

// College information
$college_info = [
    'name' => 'SIWS College',
    'phone' => '(555) 123-4567',
    'email' => 'info@siwscollege.edu'
];

// Upcoming Events
$upcoming_events = [
    [
        'title' => 'Swastika Cultural Festival',
        'date' => '2025-08-15',
        'time' => '10:00 AM - 6:00 PM',
        'location' => 'Main Campus Auditorium',
        'description' => 'Our annual cultural festival "Swastika" celebrates the rich heritage and traditions of our college community. Join us for a day filled with cultural performances, art exhibitions, music competitions, and food stalls.',
        'image' => 'swastika-event.jpg',
        'category' => 'Cultural',
        'featured' => true
    ],
    [
        'title' => 'Resonance Academic Conference',
        'date' => '2025-09-20',
        'time' => '9:00 AM - 4:00 PM',
        'location' => 'Conference Hall, Block A',
        'description' => 'The "Resonance" academic conference brings together students, faculty, and industry experts to discuss the latest trends in technology, research methodologies, and innovation in education.',
        'image' => 'resonance-conference.jpg',
        'category' => 'Academic',
        'featured' => true
    ],
    [
        'title' => 'Tech Innovation Summit',
        'date' => '2025-10-05',
        'time' => '11:00 AM - 5:00 PM',
        'location' => 'IT Department',
        'description' => 'A showcase of innovative projects and research work by our Computer Science and IT students. Industry professionals will evaluate and provide feedback on student projects.',
        'image' => 'tech-summit.jpg',
        'category' => 'Technology',
        'featured' => false
    ],
    [
        'title' => 'Career Fair 2025',
        'date' => '2025-11-12',
        'time' => '10:00 AM - 4:00 PM',
        'location' => 'Sports Complex',
        'description' => 'Meet with top employers and explore career opportunities. Over 50 companies will be participating to recruit talented students from various departments.',
        'image' => 'career-fair.jpg',
        'category' => 'Career',
        'featured' => false
    ]
];

// Recent News
$recent_news = [
    [
        'title' => 'SIWS College Ranks Among Top 10 Colleges',
        'date' => '2025-01-10',
        'summary' => 'SIWS College has been ranked among the top 10 colleges in the state for academic excellence and student satisfaction.',
        'content' => 'We are proud to announce that SIWS College has achieved a remarkable ranking in the latest educational survey...',
        'category' => 'Achievement'
    ],
    [
        'title' => 'New State-of-the-Art Laboratory Inaugurated',
        'date' => '2025-01-05',
        'summary' => 'The college inaugurated a new advanced computer laboratory with the latest technology and equipment.',
        'content' => 'The new laboratory is equipped with high-performance computers, advanced software, and modern infrastructure...',
        'category' => 'Infrastructure'
    ],
    [
        'title' => 'Students Win National Programming Competition',
        'date' => '2024-12-28',
        'summary' => 'Our Computer Science students secured first place in the National Programming Competition 2024.',
        'content' => 'Three students from our Computer Science department achieved remarkable success in the competition...',
        'category' => 'Achievement'
    ],
    [
        'title' => 'Scholarship Program Launched for Deserving Students',
        'date' => '2024-12-20',
        'summary' => 'SIWS College announced a new scholarship program to support financially disadvantaged but academically excellent students.',
        'content' => 'The scholarship program aims to provide financial assistance to students who demonstrate academic excellence...',
        'category' => 'Announcement'
    ]
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
        
        .event-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .event-card:hover {
            transform: translateY(-5px);
        }
        
        .featured-badge {
            background-color: <?php echo $theme['secondary_color']; ?>;
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 15px;
            font-size: 0.75rem;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        
        .category-badge {
            background-color: <?php echo $theme['accent_color']; ?>;
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 15px;
            font-size: 0.75rem;
        }
        
        .news-item {
            border-left: 4px solid <?php echo $theme['secondary_color']; ?>;
            padding: 1rem;
            margin-bottom: 1rem;
            background: white;
            border-radius: 5px;
        }
        
        .date-badge {
            background-color: <?php echo $theme['primary_color']; ?>;
            color: white;
            padding: 0.5rem;
            border-radius: 5px;
            text-align: center;
            min-width: 80px;
        }
        
        .btn-primary {
            background-color: <?php echo $theme['secondary_color']; ?>;
            border-color: <?php echo $theme['secondary_color']; ?>;
        }
        
        .btn-primary:hover {
            background-color: <?php echo $theme['accent_color']; ?>;
            border-color: <?php echo $theme['accent_color']; ?>;
        }
        
        .section-title {
            color: <?php echo $theme['primary_color']; ?>;
            margin-bottom: 2rem;
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
            <h1 class="display-4 mb-4">News & Events</h1>
            <p class="lead">Stay updated with the latest happenings at <?php echo $college_info['name']; ?></p>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Featured Events</h2>
            <div class="row">
                <?php foreach ($upcoming_events as $event): ?>
                    <?php if ($event['featured']): ?>
                        <div class="col-lg-6 mb-4">
                            <div class="card event-card h-100 position-relative">
                                <span class="featured-badge">Featured</span>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h5 class="card-title"><?php echo $event['title']; ?></h5>
                                        <span class="category-badge"><?php echo $event['category']; ?></span>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-auto">
                                            <div class="date-badge">
                                                <div style="font-size: 0.8rem;"><?php echo date('M', strtotime($event['date'])); ?></div>
                                                <div style="font-size: 1.2rem; font-weight: bold;"><?php echo date('d', strtotime($event['date'])); ?></div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="mb-1"><i class="fas fa-clock text-muted"></i> <?php echo $event['time']; ?></p>
                                            <p class="mb-0"><i class="fas fa-map-marker-alt text-muted"></i> <?php echo $event['location']; ?></p>
                                        </div>
                                    </div>
                                    <p class="card-text"><?php echo $event['description']; ?></p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Upcoming Events</h2>
            <div class="row">
                <?php foreach ($upcoming_events as $event): ?>
                    <div class="col-lg-6 mb-4">
                        <div class="card event-card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <h5 class="card-title"><?php echo $event['title']; ?></h5>
                                    <span class="category-badge"><?php echo $event['category']; ?></span>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="date-badge">
                                            <div style="font-size: 0.8rem;"><?php echo date('M', strtotime($event['date'])); ?></div>
                                            <div style="font-size: 1.2rem; font-weight: bold;"><?php echo date('d', strtotime($event['date'])); ?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="mb-1"><i class="fas fa-clock text-muted"></i> <?php echo $event['time']; ?></p>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt text-muted"></i> <?php echo $event['location']; ?></p>
                                    </div>
                                </div>
                                <p class="card-text"><?php echo substr($event['description'], 0, 120) . '...'; ?></p>
                                <a href="#" class="btn btn-outline-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Recent News Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Recent News</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php foreach ($recent_news as $news): ?>
                        <div class="news-item">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="mb-0"><?php echo $news['title']; ?></h5>
                                <span class="category-badge"><?php echo $news['category']; ?></span>
                            </div>
                            <p class="text-muted mb-2"><i class="fas fa-calendar-alt"></i> <?php echo date('F j, Y', strtotime($news['date'])); ?></p>
                            <p class="mb-2"><?php echo $news['summary']; ?></p>
                            <a href="#" class="text-decoration-none">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Registration CTA -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Don't Miss Out!</h2>
            <p class="lead mb-4">Register for our upcoming events and be part of the SIWS College community.</p>
            <a href="#" class="btn btn-light btn-lg">Register for Events</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo $college_info['name']; ?></h5>
                    <p>Stay connected with all the latest news and events from our college community.</p>
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
