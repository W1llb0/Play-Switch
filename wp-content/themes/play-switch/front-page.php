<?php get_header(); ?>


        
            <div class="game-banners">
                <div class="game-banners__wrapper">
                    <?php
                        $game_banner_1 = get_field('game_banner_1');
                        if( $game_banner_1 ): ?>
                            <a href="#" class="game-banner1 game-banner" style="background: url(<?php echo($game_banner_1['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_1['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_1['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_1['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_1['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_banner_2 = get_field('game_banner_2');
                        if( $game_banner_2 ): ?>
                            <a href="#" class="game-banner2 game-banner" style="background: url(<?php echo($game_banner_2['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_2['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_2['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_2['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_2['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_banner_3 = get_field('game_banner_3');
                        if( $game_banner_3 ): ?>
                            <a href="#" class="game-banner3 game-banner" style="background: url(<?php echo($game_banner_3['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_3['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_3['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_3['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_3['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_banner_4 = get_field('game_banner_4');
                        if( $game_banner_4 ): ?>
                            <a href="#" class="game-banner4 game-banner" style="background: url(<?php echo($game_banner_4['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_4['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_4['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_4['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_4['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_banner_5 = get_field('game_banner_5');
                        if( $game_banner_5 ): ?>
                            <a href="#" class="game-banner5 game-banner" style="background: url(<?php echo($game_banner_5['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_5['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_5['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_5['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_5['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_banner_6 = get_field('game_banner_6');
                        if( $game_banner_6 ): ?>
                            <a href="#" class="game-banner6 game-banner" style="background: url(<?php echo($game_banner_6['background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_banner_6['announcement']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_banner_6['title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_banner_6['subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_banner_6['views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>


                    <!-- <a href="#" class="game-banner1 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>Review</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        Scott Pilgrim vs world
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            220
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="game-banner2 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>New</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        Scott Pilgrim vs world
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="game-banner3 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>New</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        Metro Redux is now available on Nintendo Switch
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="game-banner4 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>New</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        9 monkey of Shaolin
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="game-banner5 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>New</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        Mario Golf: Super Rush gets new Japanese commercials
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="game-banner6 game-banner">
                        <div class="game-banner__content">
                            <div class="game-banner__announcement">
                                <div>Update</div>
                            </div>
                            <div class="game-banner__items">
                                <div class="game-banner__item">
                                    <div class="game-banner__name">
                                        Limited Run Games 2021
                                    </div>
                                    <div class="game-banner__section">
                                        Scott Pilgrim vs world
                                    </div>
                                </div>
                                <div class="views-wrapper">
                                    <div class="game-banner__views">
                                        <div class="views__eye">
                                            <img src="images/icon-view.svg" alt="">
                                        </div>
                                        <div class="views__number">
                                            22
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a> -->
                    <div class="controllers-image">
                        <img src="images/controllers-icon.png" alt="">
                    </div>
                </div>
            </div>
            <div class="fresh-arrivals" style="background: linear-gradient(rgba(44, 44, 44, 0.8), rgba(0, 0, 0, 0.8)), url(<?php the_field('arrivals_background') ?>) no-repeat; background-size: cover;">
                <div class="fresh-arrivals__wrapper">
                    <div class="nintendo-vector">
                        <img src="images/nintendo-vector.svg" alt="">
                    </div>
                    <div class="fresh-arrivals__title">
                       <h1><?php the_field('arrivals_title') ?></h1>
                    </div>
                    <div class="fresh-games">
                        <?php
                            $arrivals_1 = get_field('arrivals_1');
                            if( $arrivals_1 ): ?>
                                <a href="#" class="fresh-games__item">
                                    <div class="fresh-games__image-wrapper">
                                        <img src="<?php echo($arrivals_1['background']); ?>" alt="">
                                        <img class="image-wrapper__gallery" src="<?php echo($arrivals_1['announcement']); ?>" alt="">
                                    </div>
                                    <div class="fresh-games__name">
                                        <?php echo($arrivals_1['title']); ?>
                                    </div>
                                    <div class="fresh-games__views">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8729 9.61109C19.6942 9.36667 15.4371 3.62646 9.9999 3.62646C4.56274 3.62646 0.305391 9.36667 0.126914 9.61085C-0.0423048 9.84273 -0.0423048 10.1572 0.126914 10.3891C0.305391 10.6335 4.56274 16.3737 9.9999 16.3737C15.4371 16.3737 19.6942 10.6335 19.8729 10.3893C20.0423 10.1575 20.0423 9.84273 19.8729 9.61109ZM9.9999 15.055C5.99486 15.055 2.52606 11.2452 1.49922 9.99964C2.52473 8.75304 5.98626 4.94514 9.9999 4.94514C14.0048 4.94514 17.4733 8.75436 18.5006 10.0005C17.4751 11.2471 14.0135 15.055 9.9999 15.055Z" fill="#929292"/>
                                            <path d="M10 6.04395C7.81868 6.04395 6.04395 7.81868 6.04395 10C6.04395 12.1813 7.81868 13.9561 10 13.9561C12.1813 13.9561 13.9561 12.1813 13.9561 10C13.9561 7.81868 12.1813 6.04395 10 6.04395ZM10 12.6374C8.54571 12.6374 7.36266 11.4543 7.36266 10C7.36266 8.54575 8.54575 7.36266 10 7.36266C11.4543 7.36266 12.6374 8.54575 12.6374 10C12.6374 11.4543 11.4543 12.6374 10 12.6374Z" fill="#929292"/>
                                        </svg>                                        
                                        <div class="views__number">
                                            <?php echo($arrivals_1['views']); ?>
                                        </div>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $arrivals_2 = get_field('arrivals_2');
                            if( $arrivals_2 ): ?>
                                <a href="#" class="fresh-games__item">
                                    <div class="fresh-games__image-wrapper">
                                        <img src="<?php echo($arrivals_2['background']); ?>" alt="">
                                        <img class="image-wrapper__gallery" src="<?php echo($arrivals_2['announcement']); ?>" alt="">
                                    </div>
                                    <div class="fresh-games__name">
                                        <?php echo($arrivals_2['title']); ?>
                                    </div>
                                    <div class="fresh-games__views">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8729 9.61109C19.6942 9.36667 15.4371 3.62646 9.9999 3.62646C4.56274 3.62646 0.305391 9.36667 0.126914 9.61085C-0.0423048 9.84273 -0.0423048 10.1572 0.126914 10.3891C0.305391 10.6335 4.56274 16.3737 9.9999 16.3737C15.4371 16.3737 19.6942 10.6335 19.8729 10.3893C20.0423 10.1575 20.0423 9.84273 19.8729 9.61109ZM9.9999 15.055C5.99486 15.055 2.52606 11.2452 1.49922 9.99964C2.52473 8.75304 5.98626 4.94514 9.9999 4.94514C14.0048 4.94514 17.4733 8.75436 18.5006 10.0005C17.4751 11.2471 14.0135 15.055 9.9999 15.055Z" fill="#929292"/>
                                            <path d="M10 6.04395C7.81868 6.04395 6.04395 7.81868 6.04395 10C6.04395 12.1813 7.81868 13.9561 10 13.9561C12.1813 13.9561 13.9561 12.1813 13.9561 10C13.9561 7.81868 12.1813 6.04395 10 6.04395ZM10 12.6374C8.54571 12.6374 7.36266 11.4543 7.36266 10C7.36266 8.54575 8.54575 7.36266 10 7.36266C11.4543 7.36266 12.6374 8.54575 12.6374 10C12.6374 11.4543 11.4543 12.6374 10 12.6374Z" fill="#929292"/>
                                        </svg>                                        
                                        <div class="views__number">
                                            <?php echo($arrivals_2['views']); ?>
                                        </div>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $arrivals_3 = get_field('arrivals_3');
                            if( $arrivals_3 ): ?>
                                <a href="#" class="fresh-games__item">
                                    <div class="fresh-games__image-wrapper">
                                        <img src="<?php echo($arrivals_3['background']); ?>" alt="">
                                        <img class="image-wrapper__gallery" src="<?php echo($arrivals_3['announcement']); ?>" alt="">
                                    </div>
                                    <div class="fresh-games__name">
                                        <?php echo($arrivals_3['title']); ?>
                                    </div>
                                    <div class="fresh-games__views">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8729 9.61109C19.6942 9.36667 15.4371 3.62646 9.9999 3.62646C4.56274 3.62646 0.305391 9.36667 0.126914 9.61085C-0.0423048 9.84273 -0.0423048 10.1572 0.126914 10.3891C0.305391 10.6335 4.56274 16.3737 9.9999 16.3737C15.4371 16.3737 19.6942 10.6335 19.8729 10.3893C20.0423 10.1575 20.0423 9.84273 19.8729 9.61109ZM9.9999 15.055C5.99486 15.055 2.52606 11.2452 1.49922 9.99964C2.52473 8.75304 5.98626 4.94514 9.9999 4.94514C14.0048 4.94514 17.4733 8.75436 18.5006 10.0005C17.4751 11.2471 14.0135 15.055 9.9999 15.055Z" fill="#929292"/>
                                            <path d="M10 6.04395C7.81868 6.04395 6.04395 7.81868 6.04395 10C6.04395 12.1813 7.81868 13.9561 10 13.9561C12.1813 13.9561 13.9561 12.1813 13.9561 10C13.9561 7.81868 12.1813 6.04395 10 6.04395ZM10 12.6374C8.54571 12.6374 7.36266 11.4543 7.36266 10C7.36266 8.54575 8.54575 7.36266 10 7.36266C11.4543 7.36266 12.6374 8.54575 12.6374 10C12.6374 11.4543 11.4543 12.6374 10 12.6374Z" fill="#929292"/>
                                        </svg>                                        
                                        <div class="views__number">
                                            <?php echo($arrivals_3['views']); ?>
                                        </div>
                                    </div>
                                </a>
                        <?php endif; ?>
                        <?php
                            $arrivals_4 = get_field('arrivals_4');
                            if( $arrivals_4 ): ?>
                                <a href="#" class="fresh-games__item">
                                    <div class="fresh-games__image-wrapper">
                                        <img src="<?php echo($arrivals_4['background']); ?>" alt="">
                                        <img class="image-wrapper__gallery" src="<?php echo($arrivals_4['announcement']); ?>" alt="">
                                    </div>
                                    <div class="fresh-games__name">
                                        <?php echo($arrivals_4['title']); ?>
                                    </div>
                                    <div class="fresh-games__views">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8729 9.61109C19.6942 9.36667 15.4371 3.62646 9.9999 3.62646C4.56274 3.62646 0.305391 9.36667 0.126914 9.61085C-0.0423048 9.84273 -0.0423048 10.1572 0.126914 10.3891C0.305391 10.6335 4.56274 16.3737 9.9999 16.3737C15.4371 16.3737 19.6942 10.6335 19.8729 10.3893C20.0423 10.1575 20.0423 9.84273 19.8729 9.61109ZM9.9999 15.055C5.99486 15.055 2.52606 11.2452 1.49922 9.99964C2.52473 8.75304 5.98626 4.94514 9.9999 4.94514C14.0048 4.94514 17.4733 8.75436 18.5006 10.0005C17.4751 11.2471 14.0135 15.055 9.9999 15.055Z" fill="#929292"/>
                                            <path d="M10 6.04395C7.81868 6.04395 6.04395 7.81868 6.04395 10C6.04395 12.1813 7.81868 13.9561 10 13.9561C12.1813 13.9561 13.9561 12.1813 13.9561 10C13.9561 7.81868 12.1813 6.04395 10 6.04395ZM10 12.6374C8.54571 12.6374 7.36266 11.4543 7.36266 10C7.36266 8.54575 8.54575 7.36266 10 7.36266C11.4543 7.36266 12.6374 8.54575 12.6374 10C12.6374 11.4543 11.4543 12.6374 10 12.6374Z" fill="#929292"/>
                                        </svg>                                        
                                        <div class="views__number">
                                            <?php echo($arrivals_4['views']); ?>
                                        </div>
                                    </div>
                                </a>
                        <?php endif; ?>
                    </div>
                    <a class="read-review-button" href="#">
                        <svg width="225" height="64" viewBox="0 0 225 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.5 60V17.3726L21.7685 0.5H221C222.933 0.5 224.5 2.067 224.5 4V43.9602L202.68 63.5H4C2.067 63.5 0.5 61.933 0.5 60Z" stroke="white"/>
                        </svg>
                        <div class="read-review-button__content">
                            <div class="read-review-button__text">
                                <?php the_field('arrivals_button') ?>
                            </div>
                            <div class="read-review-button__arrow">
                                <img src="images/right-arrow.svg" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="heroes-list">
                <div class="heroes-list__wrapper">
                    <div class="heroes-list__name">
                        <div class="heroes-list__title">
                            <?php the_field('heroes_list_title') ?>
                        </div>
                        <div class="heroes-list__line">

                        </div>
                    </div>
                    <div class="heroes-list__content">
                        <a class="heroes-list__hero" href="#">
                            <img src="<?php the_field('heroes_list_1') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero hero" href="#">
                            <img src="<?php the_field('heroes_list_2') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero" href="#">
                            <img src="<?php the_field('heroes_list_3') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero hero" href="#">
                            <img src="<?php the_field('heroes_list_4') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero" href="#">
                            <img src="<?php the_field('heroes_list_5') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero hero" href="#">
                            <img src="<?php the_field('heroes_list_6') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero" href="#">
                            <img src="<?php the_field('heroes_list_7') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero hero" href="#">
                            <img src="<?php the_field('heroes_list_8') ?>" alt="">
                        </a>
                        <a class="heroes-list__hero" href="#">
                            <img src="<?php the_field('heroes_list_9') ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="game-sets">
                <div class="game-sets__nintendo">
                    <img src="images/nintendo-vector.svg" alt="">
                </div>
                <div class="game-sets__title">
                    Cеты игр
                </div>
                <div class="game-sets__slider swiper-container">
                    <div class="swiper" id="game-sets">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php
                                    $game_sets_slide = get_field('game_sets_slide');
                                    if( $game_sets_slide ): ?>
                                        <div class="game-sets__slide-wrapper" style="background: url(<?php echo($game_sets_slide['game_sets_slide_background']); ?>) no-repeat; background-size: cover;">
                                            <div class="slide-wrapper__content">
                                                <div class="sets-icon">
                                                    <img src="images/sets.svg" alt="">
                                                </div>
                                                <div class="slide-wrapper__title">
                                                    <?php echo($game_sets_slide['game_sets_slide_title']); ?>
                                                </div>
                                                <div class="slide-wrapper__updates">
                                                    <?php echo($game_sets_slide['game_sets_slide_subtitle']); ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php
                                    $game_sets_slide = get_field('game_sets_slide');
                                    if( $game_sets_slide ): ?>
                                        <div class="game-sets__slide-wrapper" style="background: url(<?php echo($game_sets_slide['game_sets_slide_background']); ?>) no-repeat; background-size: cover;">
                                            <div class="slide-wrapper__content">
                                                <div class="sets-icon">
                                                    <img src="images/sets.svg" alt="">
                                                </div>
                                                <div class="slide-wrapper__title">
                                                    <?php echo($game_sets_slide['game_sets_slide_title']); ?>
                                                </div>
                                                <div class="slide-wrapper__updates">
                                                    <?php echo($game_sets_slide['game_sets_slide_subtitle']); ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php
                                    $game_sets_slide = get_field('game_sets_slide');
                                    if( $game_sets_slide ): ?>
                                        <div class="game-sets__slide-wrapper" style="background: url(<?php echo($game_sets_slide['game_sets_slide_background']); ?>) no-repeat; background-size: cover;">
                                            <div class="slide-wrapper__content">
                                                <div class="sets-icon">
                                                    <img src="images/sets.svg" alt="">
                                                </div>
                                                <div class="slide-wrapper__title">
                                                    <?php echo($game_sets_slide['game_sets_slide_title']); ?>
                                                </div>
                                                <div class="slide-wrapper__updates">
                                                    <?php echo($game_sets_slide['game_sets_slide_subtitle']); ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <div class="slider__buttons">
                                <div class="game-sets-slider__prev">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="main-path" d="M0 17.1306L21.5943 -0.000488281H60C62.2091 -0.000488281 64 1.79037 64 3.99951V44.1832L41.8715 63.9995H4C1.79086 63.9995 0 62.2087 0 59.9995V17.1306Z" fill="#3C3A3B"/>
                                        <g clip-path="url(#clip0_1746_970)">
                                            <path d="M20.2779 32.6624C20.2782 32.6627 20.2784 32.663 20.2787 32.6633L25.1774 37.5383C25.5444 37.9035 26.1379 37.9021 26.5032 37.5351C26.8685 37.1681 26.8671 36.5745 26.5001 36.2093L23.2112 32.9363L43.0654 32.9363C43.5832 32.9363 44.0029 32.5166 44.0029 31.9988C44.0029 31.481 43.5832 31.0613 43.0654 31.0613L23.2112 31.0613L26.5 27.7883C26.867 27.423 26.8684 26.8295 26.5032 26.4625C26.1379 26.0954 25.5443 26.0941 25.1773 26.4593L20.2787 31.3343C20.2784 31.3346 20.2782 31.3349 20.2779 31.3352C19.9107 31.7016 19.9119 32.2971 20.2779 32.6624Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1746_970">
                                                <rect width="24" height="24" fill="white" transform="translate(44.0029 43.9988) rotate(180)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="game-sets-slider__next">
                                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="main-path" d="M0 17.1306L21.5943 -0.000488281H60C62.2091 -0.000488281 64 1.79037 64 3.99951V44.1832L41.8715 63.9995H4C1.79086 63.9995 0 62.2087 0 59.9995V17.1306Z" fill="#3C3A3B"/>
                                        <g clip-path="url(#clip0_1746_970)">
                                            <path d="M43.7221 31.3366C43.7218 31.3363 43.7216 31.336 43.7213 31.3357L38.8226 26.4607C38.4556 26.0955 37.8621 26.0969 37.4968 26.4639C37.1315 26.8309 37.1329 27.4245 37.4999 27.7897L40.7888 31.0627L20.9346 31.0627C20.4168 31.0627 19.9971 31.4825 19.9971 32.0002C19.9971 32.518 20.4168 32.9377 20.9346 32.9377L40.7888 32.9377L37.5 36.2107C37.133 36.576 37.1316 37.1696 37.4968 37.5366C37.8621 37.9036 38.4557 37.9049 38.8227 37.5397L43.7213 32.6647C43.7216 32.6645 43.7218 32.6641 43.7221 32.6638C44.0893 32.2974 44.0881 31.7019 43.7221 31.3366Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1746_970">
                                                <rect width="24" height="24" fill="white" transform="translate(44.0029 43.9988) rotate(180)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="see-more-sets">
                    <a href="#">
                        <svg width="244" height="64" viewBox="0 0 244 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 17.1311L21.5943 0H240C242.209 0 244 1.79086 244 4V44.1837L221.872 64H4C1.79086 64 0 62.2091 0 60V17.1311Z" fill="#EC1A25"/>
                        </svg>
                        <p><?php the_field('game_sets_button') ?></p>
                    </a>                        
                </div>
            </div>
            <div class="game-reviews">
                <div class="game-reviews__head">
                    <div class="game-reviews__title">
                        <?php the_field('game_reviews_title') ?>
                    </div>
                    <div class="game-reviews__line"></div>
                    <div class="see-more-reviews">
                        <a href="#">
                            <svg width="244" height="64" viewBox="0 0 244 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 17.1311L21.5943 0H240C242.209 0 244 1.79086 244 4V44.1837L221.872 64H4C1.79086 64 0 62.2091 0 60V17.1311Z" fill="#EC1A25"/>
                            </svg>
                            <p><?php the_field('game_reviews_button') ?></p>
                        </a>         
                    </div>
                </div>
                <div class="game-reviews__content">
                    <?php
                        $game_reviews_banner_1 = get_field('game_reviews_banner_1');
                        if( $game_reviews_banner_1 ): ?>
                            <a class="game-reviews__game1 game-banner" href="#" style="background: url(<?php echo($game_reviews_banner_1['game_reviews_banner_background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_reviews_banner_1['game_reviews_banner_review']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_reviews_banner_1['game_reviews_banner_title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_reviews_banner_1['game_reviews_banner_subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_reviews_banner_1['game_reviews_banner_views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                    <?php
                        $game_reviews_banner_2 = get_field('game_reviews_banner_2');
                        if( $game_reviews_banner_2 ): ?>
                            <a class="game-reviews__game1 game-banner" href="#" style="background: url(<?php echo($game_reviews_banner_2['game_reviews_banner_background']); ?>) no-repeat; background-size: cover;">
                                <div class="game-banner__content">
                                    <div class="game-banner__announcement">
                                        <div><?php echo($game_reviews_banner_2['game_reviews_banner_review']); ?></div>
                                    </div>
                                    <div class="game-banner__items">
                                        <div class="game-banner__item">
                                            <div class="game-banner__name">
                                                <?php echo($game_reviews_banner_2['game_reviews_banner_title']); ?>
                                            </div>
                                            <div class="game-banner__section">
                                                <?php echo($game_reviews_banner_2['game_reviews_banner_subtitle']); ?>
                                            </div>
                                        </div>
                                        <div class="views-wrapper">
                                            <div class="game-banner__views">
                                                <div class="views__eye">
                                                    <img src="images/icon-view.svg" alt="">
                                                </div>
                                                <div class="views__number">
                                                    <?php echo($game_reviews_banner_2['game_reviews_banner_views']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="go-top-button" onclick="topFunction()" id="myBtn">
                <svg width="152" height="152" viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_1640_474)">
                        <path d="M40 53.1311L61.5943 36H108C110.209 36 112 37.7909 112 40V88.1837L89.8715 108H44C41.7909 108 40 106.209 40 104V53.1311Z" fill="#EC1A25"/>
                    </g>
                    <g clip-path="url(#clip0_1640_474)">
                        <path d="M75.3393 60.2742C75.339 60.2745 75.3387 60.2748 75.3384 60.2751L70.4634 65.1737C70.0982 65.5407 70.0996 66.1343 70.4666 66.4996C70.8336 66.8648 71.4272 66.8634 71.7924 66.4964L75.0654 63.2075L75.0654 83.0618C75.0654 83.5795 75.4851 83.9993 76.0029 83.9993C76.5207 83.9993 76.9404 83.5795 76.9404 83.0618L76.9404 63.2075L80.2134 66.4964C80.5787 66.8634 81.1723 66.8648 81.5392 66.4995C81.9063 66.1342 81.9076 65.5406 81.5424 65.1737L76.6674 60.275C76.6671 60.2748 76.6668 60.2745 76.6665 60.2742C76.3001 59.907 75.7046 59.9082 75.3393 60.2742Z" fill="white"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_1640_474" x="0" y="0" width="152" height="152" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="20"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.9125 0 0 0 0 0.628865 0 0 0 0 0.643722 0 0 0 1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1640_474"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1640_474" result="shape"/>
                        </filter>
                        <clipPath id="clip0_1640_474">
                            <rect width="24" height="24" fill="white" transform="translate(64.0029 83.9993) rotate(-90)"/>
                        </clipPath>
                    </defs>
                </svg>
                    
            </div>
            <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
        </main>
        <?php get_footer(); ?>