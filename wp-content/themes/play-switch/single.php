<?php get_header(); ?>
<div class="navigation-road">
                <div class="navigation-road__wrapper">
                    <a class="navigation-road__main" href="#">
                        Главная
                    </a>
                    <div class="separator"></div>
                    <a class="navigation-road__reviews" href="#">
                        Обзоры
                    </a>
                    <div class="separator"></div>
                    <a class="navigation-road__game" href="#">
                        Metro 2033
                    </a>
                </div>
            </div>
            <div class="current-game-review">
                <div class="current-game-review__wrapper">
                    <div class="current-game-review__image">
                        <img src="<?php the_field('main_img') ?>" alt="">
                    </div>
                    <div class="current-game-review__card">
                        <div class="current-game-review__content-wrapper">
                            <div class="time-to-pass__wrapper">
                                <div class="time-to-pass">
                                    <img src="images/time-to-pass.svg" alt="">
                                    <p>Прохождение заняло <?php the_field('time_to_pass') ?></p>
                                </div>
                            </div>
                            <div class="current-game-info">
                                <div class="current-game-name">
									<?php the_field('game_name') ?>
                                </div>
                                <div class="current-game-additional-info">
                                    <div class="current-game-genre">
                                        <div class="current-game-genre__name">
                                            Жанр:
                                        </div>
                                        <div class="current-game-genre__content">
											<?php the_field('genre') ?>
                                        </div>
                                    </div>
                                    <div class="current-game-developer">
                                        <div class="current-game-developer__name">
                                            Разработчик:
                                        </div>
                                        <div class="current-game-developer__content">
											<?php the_field('developer') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="backstory">
                                <h2 class="backstory__title">
                                    Предыстория
                                </h2>
                                <div class="backstory__content">
									<?php the_field('backstory') ?>
                                </div>
                                <div class="backstory__image">
                                    <img src="<?php the_field('backstory_image') ?>" alt="">
                                </div>
                            </div>
                            <div class="gameplay-review">
                                <h2 class="gameplay-review__title">
                                    Геймплей и не только
                                </h2>
                                <div class="gameplay-review__content">
									<?php the_field('gameplay_review') ?>
                                </div>
                                <div class="gameplay-review__images">
                                    <img src="<?php the_field('gameplay_review_image_1') ?>" alt="">
                                    <img src="<?php the_field('gameplay_review_image_2') ?>" alt="">
                                    <img src="<?php the_field('gameplay_review_image_3') ?>" alt="">
                                </div>
                            </div>
                            <div class="game-info-list">
                                <h2 class="game-info-list__title">
                                    Пример маркированного списка
                                </h2>
                                <ul class="game-info-list__content">
                                    <?php the_field('game_info_list') ?>
                                </ul>
                                <div class="game-info-list__image">
                                    <img src="<?php the_field('game_info_image') ?>" alt="">
                                </div>
                            </div>
                            <div class="quote-example">
                                <h2 class="quote-example__title">
                                    Пример цитаты
                                </h2>
                                <div class="quote-card">
                                    <div class="quote-card__left">
                                        <div class="quote-card__quote-image">
                                            <img src="images/quote-image.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="quote-card__right">
                                        <div class="quote-card__content">
                                            Жанр Метро 2033 - шутер от первого лица с элементами стелса. О последнем я узнал уже под самый конец прохождения. Узкие тоннели метрополитена чередуются с вылазками на отправленную поверхность. 
                                            И если в тоннелях убить противников несложно даже идя напролом, то наверху в некоторых локациях я вымерял секунды
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="game-opinion">
                                <div class="pleased">
                                    <div class="pleased__title">
                                        <img src="images/pleased-image.svg" alt="">
                                        <p>Порадовало</p>
                                    </div>
                                    <div class="pleased__image">
                                        <img src="images/game-opinion__image.png" alt="">
                                    </div>
                                    <ul class="pleased__content">
                                        <li>
                                            <span>
                                                вариативность оружия;
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                очень отзывчивое управление;
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                отсутствие багов уже на старте (за исключением потокового режима в русском ПК-версии.);
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="upset">
                                    <div class="upset__title">
                                        <img src="images/upset-image.svg" alt="">
                                        <p>Огорчило</p>
                                    </div>
                                    <div class="upset__image">
                                        <img src="images/game-opinion__image.png" alt="">
                                    </div>
                                    <ul class="upset__content">
                                        <li>
                                            <span>
                                                вариативность оружия;
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                очень отзывчивое управление;
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                отсутствие багов уже на старте (за исключением потокового режима в русском ПК-версии.);
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="current-game-review__review-result">
                        <div class="review-result__wrapper">
                            <h2 class="review-result__title">
                                Заключение и итог
                            </h2>
                            <div class="review-result__content">
                                Ловлю себя на мысли, что много ещё о чем можно рассказать: о режимах игры, об уровнях сложности, об онлайн кооперативе (в 4 части) и режиме битвы меду собой. Но не хочется переходить на изложение, к тому же игроку, не знакомому с серией будет интересно открыть что-то новое, то, что не указано в моем обзоре. Если брать 4 часть, по своей личной оценке, игра для меня в топе, поставлю ей что-то типа 9,8 из 10. Минусы наверняка в ней есть, но искать их я, честно, не хочу. За 65 часов погружения, найти что-то критическое я не смог. Это именно тот случай, когда уже не ждал от игры ничего хорошего, а получил очень качественное продолжение, полностью поддерживающее дух и динамику всей серии.
                            </div>
                        </div>
                    </div>
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
        </main>
<?php get_footer(); ?>
