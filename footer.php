<!-- 
    ===========================================================
    WEBSITE FOOTER
    ===========================================================
    Shared footer containing copyright and legal links
    -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- Copyright Information -->
            <div class="col-md-6">
                <p>&copy; <?php echo $current_year; ?> <?php echo $college_info['name']; ?>. All rights reserved.</p>
            </div>

            <!-- Footer Links -->
            <div class="col-md-6">
                <div class="footer-links text-md-end">
                    <?php
                    $is_in_pages = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false);
                    $path_prefix = $is_in_pages ? '' : 'pages/';
                    ?>
                    <a href="<?php echo $is_in_pages ? '' : 'pages/'; ?>privacy.php" class="text-white me-3">Privacy
                        Policy</a>
                    <a href="<?php echo $is_in_pages ? '' : 'pages/'; ?>terms.php" class="text-white me-3">Terms of
                        Service</a>
                    <a href="<?php echo $is_in_pages ? '' : 'pages/'; ?>accessibility.php"
                        class="text-white">Accessibility</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- 
    ===========================================================
    JAVASCRIPT LIBRARIES
    ===========================================================
    Bootstrap JavaScript for interactive components
    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $is_in_pages ? '../' : ''; ?>js/script.js"></script>
<script src="<?php echo $is_in_pages ? '../' : ''; ?>js/chatbot.js"></script>

<!-- 
===========================================================
HTML DOCUMENT END
===========================================================
-->
</body>

</html>