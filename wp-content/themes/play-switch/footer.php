<footer class="footer">
            <div class="container footer__container">
                <div class="relevance">
                    <?php the_field('year') ?>
                </div>
                <div class="logos">
                    <a href="#" class="logo-nintendo">
                        <img src="<?php the_field('footer_img_1') ?>" alt="">
                    </a>
                    <a href="#" class="logo-super-nintendo">
                        <img src="<?php the_field('footer_img_2') ?>" alt="">
                    </a>
                </div>
                <a href="#" class="development">
                    Разработка сайта
                </a>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<? echo get_template_directory_uri(); ?>/scripts/script.js"></script>
</body>
</html>