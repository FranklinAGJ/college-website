<?php
$current_page = 'admissions';
$page_title = 'Admissions';
$site_description = "Apply for admission to SIWS College programs";

// Include shared header
include '../includes/header.php';

// Admission steps
$admission_steps = [
    [
        'step' => '1. Application',
        'description' => 'Complete our online application form with your personal and academic details.',
        'icon' => 'file-alt'
    ],
    [
        'step' => '2. Documents',
        'description' => 'Submit required academic transcripts, identification, and supporting documents.',
        'icon' => 'folder-open'
    ],
    [
        'step' => '3. Review',
        'description' => 'Our admissions team will review your application and credentials thoroughly.',
        'icon' => 'search'
    ],
    [
        'step' => '4. Decision',
        'description' => 'Receive your admission decision and next steps for enrollment if accepted.',
        'icon' => 'check-circle'
    ]
];

// Required documents
$required_documents = [
    'Completed application form',
    'Class X and XII mark sheets (original and photocopy)',
    'Transfer Certificate from previous institution',
    'Migration Certificate (if applicable)',
    'Character Certificate from previous institution',
    'Passport size photographs (4)',
    'ID proof (Aadhar Card/Passport/Voter ID)',
    'Caste Certificate (if applicable)',
    'Income Certificate (if applicable for scholarships)'
];

// Important dates
$important_dates = [
    [
        'event' => 'Application Start Date',
        'date' => 'April 1, 2024'
    ],
    [
        'event' => 'Application Deadline',
        'date' => 'May 31, 2024'
    ],
    [
        'event' => 'Entrance Examination',
        'date' => 'June 15, 2024'
    ],
    [
        'event' => 'Results Announcement',
        'date' => 'June 30, 2024'
    ],
    [
        'event' => 'First Merit List',
        'date' => 'July 5, 2024'
    ],
    [
        'event' => 'Second Merit List',
        'date' => 'July 15, 2024'
    ],
    [
        'event' => 'Classes Begin',
        'date' => 'August 1, 2024'
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

    <!-- Admission Process -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center animate-on-scroll slide-up-element">
                    <h2 class="mb-3">Admission Process</h2>
                    <div class="heading-underline mx-auto"></div>
                    <p class="lead mt-4">Our admission process is designed to be straightforward and supportive. Follow these steps to apply for your desired program at SIWS College.</p>
                </div>
            </div>
            
            <!-- Admission Steps -->
            <div class="row">
                <?php $delay = 0.1; foreach ($admission_steps as $step): ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm animate-on-scroll fade-in-element" style="transition-delay: <?php echo $delay; ?>s;">
                        <div class="card-body text-center">
                            <div class="step-number"><?php echo substr($step['step'], 0, 1); ?></div>
                            <div class="icon-circle mb-4 mx-auto">
                                <i class="fas fa-<?php echo $step['icon']; ?> fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title"><?php echo $step['step']; ?></h5>
                            <p class="card-text"><?php echo $step['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php $delay += 0.1; endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Application Form -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Application Form</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Complete the form below to start your application process</p>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow-lg animate-on-scroll fade-in-element">
                        <div class="card-header bg-primary text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-edit me-2"></i> Online Application</h4>
                        </div>
                        <div class="card-body p-4">
                            <form>
                                <div class="form-section mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="section-icon me-3">
                                            <i class="fas fa-user-circle fa-2x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Personal Information</h4>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control form-control-lg" id="firstName" placeholder="Enter your first name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Enter your last name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                <input type="email" class="form-control form-control-lg" id="email" placeholder="name@example.com" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Your contact number" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" id="address" rows="3" placeholder="Enter your complete address" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="section-icon me-3">
                                            <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Academic Information</h4>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="program" class="form-label">Program Applying For</label>
                                            <select class="form-select form-select-lg" id="program" required>
                                                <option value="" selected disabled>Select Program</option>
                                                <option value="bcom">Bachelor of Commerce (B.Com)</option>
                                                <option value="baf">Bachelor of Accounting and Finance (B.A.F)</option>
                                                <option value="bms">Bachelor of Management Studies (B.M.S)</option>
                                                <option value="bsc">Bachelor of Science (B.Sc)</option>
                                                <option value="mcom">Master of Commerce (M.Com)</option>
                                                <option value="mms">Master of Management Studies (M.M.S)</option>
                                                <option value="msc">Master of Science (M.Sc)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="previousInstitution" class="form-label">Previous Institution</label>
                                            <input type="text" class="form-control form-control-lg" id="previousInstitution" placeholder="Name of your previous institution" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="percentage" class="form-label">Previous Percentage/CGPA</label>
                                            <input type="text" class="form-control form-control-lg" id="percentage" placeholder="Your percentage or CGPA" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="yearOfPassing" class="form-label">Year of Passing</label>
                                            <input type="text" class="form-control form-control-lg" id="yearOfPassing" placeholder="Year you completed your previous education" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section mb-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="section-icon me-3">
                                            <i class="fas fa-file-upload fa-2x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Documents</h4>
                                    </div>
                                    <div class="mb-4">
                                        <label for="documents" class="form-label">Upload Documents (PDF only)</label>
                                        <input type="file" class="form-control form-control-lg" id="documents" multiple>
                                        <div class="form-text">Please upload all required documents as mentioned in the checklist.</div>
                                    </div>
                                    
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                        <label class="form-check-label" for="termsCheck">I agree to the <a href="#">terms and conditions</a> and <a href="#">privacy policy</a></label>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 py-3">
                                        <i class="fas fa-paper-plane me-2"></i> Submit Application
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Required Documents -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Application Requirements</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Documents and important dates for your application</p>
            </div>
            <div class="row">
                <div class="col-lg-6 animate-on-scroll fade-in-element" style="transition-delay: 0.1s;">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-file-alt me-2"></i> Required Documents</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <?php foreach ($required_documents as $index => $document): ?>
                                <li class="list-group-item d-flex align-items-center">
                                    <div class="document-icon me-3">
                                        <i class="fas fa-file-alt text-primary"></i>
                                    </div>
                                    <span><?php echo $document; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-outline-primary">Download Document Checklist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 animate-on-scroll fade-in-element" style="transition-delay: 0.2s;">
                    <div class="card shadow-sm h-100">
                        <div class="card-header bg-primary text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-calendar-alt me-2"></i> Important Dates</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Event</th>
                                            <th class="text-end">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($important_dates as $date): ?>
                                        <tr>
                                            <td><i class="fas fa-calendar-check text-primary me-2"></i> <?php echo $date['event']; ?></td>
                                            <td class="text-end fw-bold"><?php echo $date['date']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="#" class="btn btn-outline-primary">Add to Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll slide-up-element">
                <h2 class="mb-3">Frequently Asked Questions</h2>
                <div class="heading-underline mx-auto"></div>
                <p class="lead mt-3">Find answers to common questions about our admission process</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto animate-on-scroll fade-in-element">
                    <div class="accordion shadow-sm" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-question-circle text-primary me-2"></i> What are the eligibility criteria for admission?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Eligibility criteria vary by program. Generally, for undergraduate programs, a minimum of 50% marks in Class XII is required. For postgraduate programs, a bachelor's degree with at least 50% marks is required.</p>
                                    <p class="mb-0 text-muted"><small>Please check specific program requirements for detailed eligibility criteria.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-edit text-primary me-2"></i> Is there an entrance examination?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Some programs require an entrance examination, while others admit students based on merit.</p>
                                    <p class="mb-0 text-muted"><small>Please check the specific program requirements for details on entrance examinations.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-award text-primary me-2"></i> Are there any scholarships available?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes, SIWS College offers various scholarships based on:</p>
                                    <ul>
                                        <li>Academic merit</li>
                                        <li>Financial need</li>
                                        <li>Special categories and reservations</li>
                                        <li>Sports and cultural achievements</li>
                                    </ul>
                                    <p class="mb-0 text-muted"><small>Details about scholarships are available on the college website or from the admissions office.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-money-bill-wave text-primary me-2"></i> What is the fee structure?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Fee structures vary by program. Detailed fee information is available on the college website or from the admissions office.</p>
                                    <p>Fees can be paid in installments as per college policy, and various payment methods are accepted including:</p>
                                    <ul>
                                        <li>Online payment</li>
                                        <li>Demand Draft</li>
                                        <li>Bank transfer</li>
                                    </ul>
                                    <p class="mb-0 text-muted"><small>For detailed fee structure, please contact the accounts department.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-home text-primary me-2"></i> Is hostel accommodation available?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes, limited hostel accommodation is available for both boys and girls. Our hostels provide:</p>
                                    <ul>
                                        <li>Furnished rooms</li>
                                        <li>Mess facilities</li>
                                        <li>Wi-Fi connectivity</li>
                                        <li>Security and warden supervision</li>
                                    </ul>
                                    <p class="mb-0 text-muted"><small>Applications for hostel accommodation should be submitted along with the admission form.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-outline-primary">Have more questions? Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>