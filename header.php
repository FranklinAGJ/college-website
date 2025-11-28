<?php
/*
 * =====================================================
 * SHARED HEADER FILE FOR ALL PAGES
 * =====================================================
 * This file contains the common header, navigation, and 
 * configuration data used across all pages of the website.
 * =====================================================
 */

/* ------ PAGE CONFIGURATION ------ */
// Set default values for page variables if not already defined
if (!isset($current_page)) {
    $current_page = 'home';
}
if (!isset($page_title)) {
    $page_title = 'SIWS College';
}

/* ------ COLLEGE INFORMATION ------ */
// Main college details and contact information
$college_info = [
    'name' => 'S.I.W.S. N.R. Swamy College of Commerce & Economics and Smt. Thirumalai College of Science (Autonomous)',
    'short_name' => 'SIWS College',
    'address' => 'S.I.W.S. College, Plot No. 337, Sewree Wadala Estate,<br>Major R. Parameshwaran Marg, Mumbai – 400 031',
    'phone' => '+91-22-2414 2824',
    'email' => 'info@siws-college.edu',
    'website' => 'www.siws-college.edu',
    'office_hours' => 'Monday to Saturday: 9:00 AM - 5:00 PM<br>Closed on Sundays and Public Holidays',
    'college_code' => '311',
    'aishe_code' => 'C-34030',
    'naac_grade' => 'NAAC Re-Accredited A Grade with 3.15 CGPA',
    'management' => 'South Indians\' Welfare Society',
    'autonomy_status' => 'Autonomous',
    'university_affiliation' => 'University of Mumbai'
];

/* ------ NAVIGATION MENU ------ */
// Main navigation links for all pages
// Check if we're in the pages directory or root
$is_in_pages = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false);

// Set navigation links based on current location
if ($is_in_pages) {
    $nav_menu = [
        ['name' => 'Home', 'link' => '../index.php', 'page' => 'home'],
        ['name' => 'About', 'link' => 'about-us.php', 'page' => 'about'],
        ['name' => 'Founders', 'link' => 'founder-trustees.php', 'page' => 'founders'],
        ['name' => 'Programs', 'link' => 'programs.php', 'page' => 'programs'],
        ['name' => 'Admissions', 'link' => 'admission.php', 'page' => 'admissions'],
        ['name' => 'Contact', 'link' => 'contact.php', 'page' => 'contact']
    ];
} else {
    $nav_menu = [
        ['name' => 'Home', 'link' => 'index.php', 'page' => 'home'],
        ['name' => 'About', 'link' => 'pages/about-us.php', 'page' => 'about'],
        ['name' => 'Founders', 'link' => 'pages/founder-trustees.php', 'page' => 'founders'],
        ['name' => 'Programs', 'link' => 'pages/programs.php', 'page' => 'programs'],
        ['name' => 'Admissions', 'link' => 'pages/admission.php', 'page' => 'admissions'],
        ['name' => 'Contact', 'link' => 'pages/contact.php', 'page' => 'contact']
    ];
}

/* ------ THEME CONFIGURATION ------ */
// Color scheme and styling variables
$theme = [
    'primary_color' => '#2c3e50',
    'secondary_color' => '#3498db',
    'accent_color' => '#e74c3c',
    'background_color' => '#ecf0f1',
    'text_color' => '#2c3e50',
    'background_image' => 'college-campus.jpg',
    'hero_background' => 'hero-bg.jpg',
    'gradient_start' => '#3498db',
    'gradient_end' => '#2980b9'
];

/* ------ IMAGE ASSETS ------ */
// Default images for different sections
$images = [
    'hero' => 'home-banner.jpg',
    'about' => 'principal-video-thumbnail.jpg',
    'programs' => 'amenities-banner.jpg',
    'admissions' => 'banner-slider.png',
    'contact' => 'campus-entrance.jpg',
    'logo' => 'siws-logo.png'
];

/* ------ GLOBAL VARIABLES ------ */
// Current year for copyright and other dynamic content
$current_year = date('Y');
?>

<!-- 
===========================================================
HTML DOCUMENT START - SHARED HEADER FOR ALL PAGES
===========================================================
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - SIWS College</title>
    <meta name="description" content="SIWS College - Empowering minds, shaping futures, building tomorrow's leaders">

    <!-- EXTERNAL STYLESHEETS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $is_in_pages ? '../' : ''; ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo $is_in_pages ? '../' : ''; ?>css/chatbot.css">

    <!-- DYNAMIC THEME STYLES -->
    <style>
        /* Global theme colors applied dynamically */
        body {
            background-color:
                <?php echo $theme['background_color']; ?>
            ;
            color:
                <?php echo $theme['text_color']; ?>
            ;
            padding-top: 70px;
            /* Add padding for fixed navbar */
        }

        /* Navigation bar styling */
        .navbar {
            background-color:
                <?php echo $theme['primary_color']; ?>
            ;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Transparent navbar on top */
        .navbar.navbar-transparent {
            background-color: transparent;
            box-shadow: none;
        }

        /* Scrolled navbar style */
        .navbar.scrolled {
            background-color: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
        }

        /* Navigation links */
        .navbar-nav .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            margin: 0 0.2rem;
            transition: all 0.3s ease;
        }

        /* Navigation link hover effect */
        .navbar-nav .nav-link:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color:
                <?php echo $theme['accent_color']; ?>
            ;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover:before,
        .navbar-nav .nav-link.active:before {
            width: 80%;
        }

        /* Hero section background */
        .hero-section {
            background-image: url(<?php echo $is_in_pages ? '../' : ''; ?>images/<?php echo $images['hero']; ?>);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Parallax effect */
            color: #fff;
            position: relative;
            margin-top: -70px;
            /* Compensate for navbar padding */
            padding-top: 70px;
        }

        /* Hero section overlay */
        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.7), rgba(52, 152, 219, 0.7));
            z-index: 1;
        }

        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        /* Primary button styling */
        .btn-primary {
            background-color:
                <?php echo $theme['secondary_color']; ?>
            ;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color:
                <?php echo $theme['accent_color']; ?>
            ;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Page header styling */
        .page-header {
            background: linear-gradient(135deg,
                    <?php echo $theme['primary_color']; ?>
                    ,
                    <?php echo $theme['secondary_color']; ?>
                );
            color: white;
            padding: 100px 0 50px;
            margin-top: 0;
        }

        /* Active navigation link styling */
        .navbar-nav .nav-link.active {
            color:
                <?php echo $theme['accent_color']; ?>
                !important;
        }

        /* Card hover effects */
        .card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- 
    ===========================================================
    MAIN NAVIGATION BAR
    ===========================================================
    Fixed top navigation with college logo and main menu items
    -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- College Logo and Brand -->
            <a class="navbar-brand d-flex align-items-center" href="<?php echo $is_in_pages ? '../' : ''; ?>index.php">
                <img src="<?php echo $is_in_pages ? '../' : ''; ?>images/<?php echo $images['logo']; ?>"
                    alt="SIWS College Logo" height="40" class="me-2">
                <div>
                    <h5 class="mb-0">SIWS College</h5>
                    <small class="text-light">Excellence in Education</small>
                </div>
            </a>

            <!-- Mobile menu toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($nav_menu as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == $item['page']) ? 'active' : ''; ?>"
                                href="<?php echo $item['link']; ?>">
                                <span><?php echo $item['name']; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>