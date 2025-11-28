<?php
// Configuration
$site_title = "SIWS College";
$page_title = "Photo Gallery";

// Images with descriptions
$images = [
    [
        'filename' => 'campus-library.jpg',
        'title' => 'Campus Library',
        'description' => 'Our state-of-the-art library with extensive digital and physical resources.'
    ],
    [
        'filename' => 'courtyard.jpg',
        'title' => 'Campus Courtyard',
        'description' => 'A beautiful outdoor space where students gather and relax.'
    ],
    [
        'filename' => 'students-studying.jpg',
        'title' => 'Students Studying',
        'description' => 'Dedicated students engaged in collaborative learning.'
    ],
    [
        'filename' => 'science-lab.jpg',
        'title' => 'Science Laboratory',
        'description' => 'Modern laboratory facilities for hands-on scientific research.'
    ],
    [
        'filename' => 'computer-lab.jpg',
        'title' => 'Computer Laboratory',
        'description' => 'Advanced computing facilities for technology education.'
    ],
    [
        'filename' => 'student-groups.jpg',
        'title' => 'Student Groups',
        'description' => 'Diverse student community working together on projects.'
    ]
];

// Theme
$theme = [
    'primary_color' => '#2c3e50',
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

    <style>
        body {
            background-color: #f8f9fa;
            color: <?php echo $theme['primary_color']; ?>;
        }
        .gallery-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border: 3px solid <?php echo $theme['accent_color']; ?>;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .gallery-image:hover {
            transform: scale(1.05);
        }
        .modal-img {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .page-header {
            background: linear-gradient(135deg, <?php echo $theme['primary_color']; ?>, <?php echo $theme['accent_color']; ?>);
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-4">Photo Gallery</h1>
                <p class="lead">Discover life at SIWS College through our campus photos</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <?php foreach ($images as $index => $image): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="../images/<?php echo $image['filename']; ?>" 
                         class="gallery-image" 
                         alt="<?php echo $image['title']; ?>"
                         data-bs-toggle="modal" 
                         data-bs-target="#imageModal" 
                         data-image="../images/<?php echo $image['filename']; ?>"
                         data-title="<?php echo $image['title']; ?>"
                         data-description="<?php echo $image['description']; ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $image['title']; ?></h5>
                        <p class="card-text text-center"><?php echo $image['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="" class="modal-img">
                <p id="modalDescription" class="mt-3"></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Modal functionality
    document.addEventListener('DOMContentLoaded', function() {
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('imageModalLabel');
        const modalDescription = document.getElementById('modalDescription');
        
        imageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            const imageTitle = button.getAttribute('data-title');
            const imageDescription = button.getAttribute('data-description');
            
            modalImage.src = imageSrc;
            modalImage.alt = imageTitle;
            modalTitle.textContent = imageTitle;
            modalDescription.textContent = imageDescription;
        });
    });
</script>

</body>
</html>

