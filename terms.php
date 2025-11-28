<?php
$current_page = 'terms';
$page_title = 'Terms of Service';
$site_description = "Terms and conditions for using the SIWS College website";

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

    <!-- Terms of Service Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow-sm p-4">
                        <h2>Terms of Service</h2>
                        <p class="lead">Last Updated: July 24, 2025</p>

                        <h3 class="mt-4">1. Acceptance of Terms</h3>
                        <p>By accessing or using the SIWS College website, you agree to be bound by these Terms of
                            Service and all applicable laws and regulations. If you do not agree with any of these
                            terms, you are prohibited from using or accessing this site.</p>

                        <h3 class="mt-4">2. Use License</h3>
                        <p>Permission is granted to temporarily download one copy of the materials on SIWS College's
                            website for personal, non-commercial transitory viewing only. This is the grant of a
                            license, not a transfer of title, and under this license you may not:</p>
                        <ul>
                            <li>Modify or copy the materials;</li>
                            <li>Use the materials for any commercial purpose, or for any public display;</li>
                            <li>Attempt to decompile or reverse engineer any software contained on SIWS College's
                                website;</li>
                            <li>Remove any copyright or other proprietary notations from the materials; or</li>
                            <li>Transfer the materials to another person or "mirror" the materials on any other server.
                            </li>
                        </ul>
                        <p>This license shall automatically terminate if you violate any of these restrictions and may
                            be terminated by SIWS College at any time.</p>

                        <h3 class="mt-4">3. Disclaimer</h3>
                        <p>The materials on SIWS College's website are provided on an 'as is' basis. SIWS College makes
                            no warranties, expressed or implied, and hereby disclaims and negates all other warranties
                            including, without limitation, implied warranties or conditions of merchantability, fitness
                            for a particular purpose, or non-infringement of intellectual property or other violation of
                            rights.</p>

                        <h3 class="mt-4">4. Limitations</h3>
                        <p>In no event shall SIWS College or its suppliers be liable for any damages (including, without
                            limitation, damages for loss of data or profit, or due to business interruption) arising out
                            of the use or inability to use the materials on SIWS College's website, even if SIWS College
                            or a SIWS College authorized representative has been notified orally or in writing of the
                            possibility of such damage.</p>

                        <h3 class="mt-4">5. Accuracy of Materials</h3>
                        <p>The materials appearing on SIWS College's website could include technical, typographical, or
                            photographic errors. SIWS College does not warrant that any of the materials on its website
                            are accurate, complete or current. SIWS College may make changes to the materials contained
                            on its website at any time without notice.</p>

                        <h3 class="mt-4">6. Links</h3>
                        <p>SIWS College has not reviewed all of the sites linked to its website and is not responsible
                            for the contents of any such linked site. The inclusion of any link does not imply
                            endorsement by SIWS College of the site. Use of any such linked website is at the user's own
                            risk.</p>

                        <h3 class="mt-4">7. Modifications</h3>
                        <p>SIWS College may revise these terms of service for its website at any time without notice. By
                            using this website you are agreeing to be bound by the then current version of these terms
                            of service.</p>

                        <h3 class="mt-4">8. Governing Law</h3>
                        <p>These terms and conditions are governed by and construed in accordance with the laws of India
                            and you irrevocably submit to the exclusive jurisdiction of the courts in Mumbai,
                            Maharashtra.</p>

                        <h3 class="mt-4">9. Contact Information</h3>
                        <p>For any questions regarding these Terms of Service, please contact us at:
                            info@siws-college.edu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>