<?php
$current_page = 'accessibility';
$page_title = 'Accessibility Statement';
$site_description = "SIWS College's commitment to digital accessibility";

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

    <!-- Accessibility Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card shadow-sm p-4">
                        <h2>Accessibility Statement</h2>
                        <p class="lead">Last Updated: July 24, 2025</p>

                        <h3 class="mt-4">Our Commitment</h3>
                        <p>SIWS College is committed to ensuring digital accessibility for people with disabilities. We
                            are continually improving the user experience for everyone, and applying the relevant
                            accessibility standards.</p>

                        <h3 class="mt-4">Conformance Status</h3>
                        <p>The Web Content Accessibility Guidelines (WCAG) defines requirements for designers and
                            developers to improve accessibility for people with disabilities. It defines three levels of
                            conformance: Level A, Level AA, and Level AAA.</p>
                        <p>SIWS College's website is partially conformant with WCAG 2.1 level AA. Partially conformant
                            means that some parts of the content do not fully conform to the accessibility standard.</p>

                        <h3 class="mt-4">Accessibility Features</h3>
                        <p>SIWS College's website includes the following accessibility features:</p>
                        <ul>
                            <li>Semantic HTML markup</li>
                            <li>ARIA landmarks to identify regions of a page</li>
                            <li>Alt text for all images</li>
                            <li>Proper heading structure</li>
                            <li>Sufficient color contrast</li>
                            <li>Keyboard accessibility</li>
                            <li>Resizable text</li>
                            <li>Consistent navigation</li>
                        </ul>

                        <h3 class="mt-4">Limitations</h3>
                        <p>Despite our best efforts to ensure accessibility of SIWS College's website, there may be some
                            limitations. Below is a description of known limitations, and potential solutions. Please
                            contact us if you observe an issue not listed below.</p>
                        <p>Known limitations for SIWS College's website:</p>
                        <ul>
                            <li>Some older PDF documents are not properly tagged or do not contain proper document
                                structure. We are working to fix these issues.</li>
                            <li>Some video content may not have captions or audio descriptions. We are working to
                                provide alternatives.</li>
                        </ul>

                        <h3 class="mt-4">Feedback</h3>
                        <p>We welcome your feedback on the accessibility of SIWS College's website. Please let us know
                            if you encounter accessibility barriers:</p>
                        <ul>
                            <li>Phone: +91-22-2414 2824</li>
                            <li>E-mail: info@siws-college.edu</li>
                            <li>Postal address: S.I.W.S. College, Plot No. 337, Sewree Wadala Estate, Major R.
                                Parameshwaran Marg, Mumbai – 400 031</li>
                        </ul>
                        <p>We try to respond to feedback within 5 business days.</p>

                        <h3 class="mt-4">Assessment Approach</h3>
                        <p>SIWS College assessed the accessibility of its website by the following approaches:</p>
                        <ul>
                            <li>Self-evaluation</li>
                            <li>External evaluation</li>
                        </ul>

                        <h3 class="mt-4">Compatibility with Browsers and Assistive Technology</h3>
                        <p>SIWS College's website is designed to be compatible with the following assistive
                            technologies:</p>
                        <ul>
                            <li>Screen readers (NVDA, JAWS, VoiceOver)</li>
                            <li>Screen magnifiers</li>
                            <li>Speech recognition software</li>
                            <li>Keyboard-only navigation</li>
                        </ul>
                        <p>The website is compatible with recent versions of major browsers including Chrome, Firefox,
                            Safari, and Edge.</p>

                        <h3 class="mt-4">Technical Specifications</h3>
                        <p>Accessibility of SIWS College's website relies on the following technologies to work with the
                            particular combination of web browser and any assistive technologies or plugins installed on
                            your computer:</p>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>WAI-ARIA</li>
                        </ul>
                        <p>These technologies are relied upon for conformance with the accessibility standards used.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>