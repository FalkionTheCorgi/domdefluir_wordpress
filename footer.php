<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-12 col-12 text-center">
                <p>© 2020 All Rights Reserved. domdefluir</p>
            </div>
            <nav class="footer-menu col-sm-5 col-8 text-right">
                <?php 
                wp_nav_menu( 
                	array( 
                		'theme_location' =>  'footer_menu'
                	) 
                ); 
                ?>
            </nav>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>	
</body>
</html>