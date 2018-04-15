<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igrodetki
 */

get_header();
?>
    <main class="container">
        <div class="banner">
            <img class="banner__img" src="img/bike-banner.png">
        </div>
        <h2 class="section-title"><img class="section-title__img" src="img/actual-news-icon.png">Актуальные новости</h2>
        <div class="img-with-right-slider">
            <img class="img-with-right-slider__img" src="img/actual-news-big.png">
            <div class="slider slider--border">
                <div class="slider__wrapper owl-carousel owl-slider" id="owl-slider">
                    <div class="slider__item">
                        <h3 class="slider__title">«Моя прекрасная выписка из роддома»: Монологи мам</h3>
                        <p class="slider__description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel
                            velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                            ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                            amet
                            mauris. Morbi </p>
                    </div>
                    <div class="slider__item">
                        <h3 class="slider__title">«Моя прекрасная выписка из роддома»: Монологи мам</h3>
                        <p class="slider__description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel
                            velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                            ipsum, nec
                            sagittis sem nibh id elit.</p>
                    </div>
                    <div class="slider__item">
                        <h3 class="slider__title">«Моя прекрасная выписка из роддома»: Монологи мам</h3>
                        <p class="slider__description">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                            vel
                            velit
                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                            nec
                            sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                            Morbi</p>
                    </div>
                </div>
                <div id='carousel-custom-dots' class='owl-dots'>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                    <div class='owl-dot'></div>
                </div>
            </div>
        </div>
        <div class="flex flex--img-with-right-slider">
            <a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
        </div>
        <div class="dots-line"></div>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/games-icon.png">Игры
        </h2>
        <div class="flex-sb flex--games">
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <form class="subscribe-news__form" action="#" method="post">
                <div class="flex-sb-aic subscribe-news__form-items-wrap">
                    <input class="subscribe-news__email" type="email" name="email" placeholder="Ваш email">
                    <button class="subscribe-news__submit" type="submit"><span class="subscribe-news__submit-text1">Подписаться</span><span>+1258</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="dots-line"></div>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/literature-icon.png">Литература
        </h2>
        <div class="flex-sb flex--games">
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="banner banner--second">
            <img class="banner__img" src="img/children-banner.png">
        </div>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/psychology-icon.png">Психология
        </h2>
        <div class="flex-sb flex--games">
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <form class="subscribe-news__form" action="#" method="post">
                <div class="flex-sb-aic subscribe-news__form-items-wrap">
                    <input class="subscribe-news__email" type="email" name="email" placeholder="Ваш email">
                    <button class="subscribe-news__submit" type="submit"><span class="subscribe-news__submit-text1">Подписаться</span><span>+1258</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="dots-line"></div>
    </main>
<?php
get_footer();
