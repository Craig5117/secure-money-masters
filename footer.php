        <footer>
            <div id="footer-sidebar" class="secondary">
                <div id="footer-sidebar1">
        <?php
            if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
            }
        ?>
                </div>
                <div id="footer-sidebar2">
        <?php
            if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
            }
        ?>
                </div>
                <div id="footer-sidebar3">
        <?php
            if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
            }
        ?>
                </div>
            </div>
            <div class="bottom-el">
                <span>&copy 2021 SecureMoneyMasters</span><span><a href="<?php echo site_url('/privacy-policy') 
                            ?>">Privacy Policy</a></span>
            </div>
        </footer>
<?php wp_footer(); ?>
    </body>
</html>