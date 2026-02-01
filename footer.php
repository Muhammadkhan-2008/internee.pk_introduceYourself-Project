<?php
/**
 * The footer for our theme.
 *
 * @package Internee_Profile
 */
?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <h3><?php esc_html_e( 'Internee Profile', 'internee-profile' ); ?></h3>
            <p><?php esc_html_e( 'Built for the Internee.pk Virtual Internship Program.', 'internee-profile' ); ?></p>
        </div>

        <div class="footer-links">
            <h4><?php esc_html_e( 'Sections', 'internee-profile' ); ?></h4>
            <ul>
                <li><a href="#welcome">Welcome</a></li>
                <li><a href="#academic">Academic</a></li>
                <li><a href="#tech">Tech</a></li>
                <li><a href="#hobbies">Hobbies</a></li>
                <li><a href="#gratitude">Thanks</a></li>
                <li><a href="#goals">Goals</a></li>
            </ul>
        </div>

        <div class="footer-note">
            <h4><?php esc_html_e( 'Connect', 'internee-profile' ); ?></h4>
            <p><?php esc_html_e( 'Grateful to Internee.pk for the opportunity to grow practical WordPress and frontend skills.', 'internee-profile' ); ?></p>
            <a class="footer-link" href="https://internee.pk" target="_blank" rel="noopener noreferrer">internee.pk</a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Muhammad Khan. <?php esc_html_e( 'All rights reserved.', 'internee-profile' ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
