    <footer>
    <?php
        wp_nav_menu( array(
            'theme_location' => 'secondary_menu'
        ) );
    ?>
    </footer>
    <?php wp_footer()?>
</body>
<script>
    $(document).ready(function(){
        $('.slider').bxSlider();
    });
</script>
</html>