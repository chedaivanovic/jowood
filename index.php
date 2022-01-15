<?php
$pageTitle = 'Početna strana';
$pageClass = 'home';
include('inc/body-before.php');
require('functions.php');
?>

<section id="hero">
    <img id="main-hero-img" src="assets/img/hero.jpg" alt="">
    <img id="main-hero-head" src="assets/img/logo/jowood-logo-head.svg" alt="">
    <div class="hero-content">
        <div class="wrapper">
            <div class="hero-title text-white text-center" data-aos="zoom-in" data-duration="600">
                <h2 class="h2 font-weight-light mb-2" data-aos="fade-right" data-aos-delay="700">Tražite najbolju podlogu za život?</h2>
                <p class="display-4 font-weight-light mb-4" data-aos="fade-left" data-aos-delay="1400">Na pravom ste mjestu</p>
                <span data-aos="fade-up" data-aos-delay="2100">
                    <a class="cta-btn cta-btn-primary" href="floors.php">Pogledajte naše podove</a>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="home-about-us">
    <div class="wrapper text-center">
        <h1 class="display-4 mb-3">Mi smo JoWood</h1>
        <p class="h3 font-weight-light mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non sit architecto neque laborum nam rem earum! Rem molestiae laborum unde, veniam ab consequuntur minus animi nulla blanditiis at fugiat ipsa laudantium doloremque iste, consectetur hic itaque esse! Quae, nisi quaerat atque deserunt ab sequi facere temporibus qui, aut sit delectus ratione odit quidem, amet officiis in quisquam veritatis ipsum deleniti alias. Sequi quae officiis ut reprehenderit alias, deserunt blanditiis quisquam voluptates dolorem doloribus eveniet eaque! Autem cupiditate dolores, ad quibusdam accusamus ipsam beatae consectetur, eveniet hic vero quasi natus eos vitae iste voluptate assumenda fugiat incidunt sunt praesentium a voluptas...</p>
        <span><a class="cta-btn cta-btn-secondary" href="about.php">Pročitajte više...</a></span>
    </div>
</section>

<section id="floors-home">
    <div class="wrapper">
        <div class="floor-images d-none">
            <img src="assets/img/home-floors-bg/cube.jpg" alt="JoWood 3D Podovi | cube">
            <img src="assets/img/home-floors-bg/flower.jpg" alt="JoWood 3D Podovi | flower">
            <img src="assets/img/home-floors-bg/hexagon.jpg" alt="JoWood 3D Podovi | hexagon">
            <img src="assets/img/home-floors-bg/line.jpg" alt="JoWood 3D Podovi | line">
            <img src="assets/img/home-floors-bg/star.jpg" alt="JoWood 3D Podovi | star">
            <img src="assets/img/home-floors-bg/triangle.jpg" alt="JoWood 3D Podovi | triangle">
        </div>
        <div id="p-main-box">
            <div class="floors-header mb-4 w-100">
                <button class="all-floors-trigger col-12 mb-3 floors-trigger-active" data-target="#all-floors-tab">
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#fff" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                        </svg>
                        Upoznajte naše 3D podove
                    </span>
                </button>
            </div>
            <div id="floors-body" class="floors-tab">
                <div id="all-floors-tab" class="">
                    <div class="row py-4">
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#cube-tab" data-bg="cube">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube">
                            <h4 class="text-white">Cube</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#flower-tab" data-bg="flower">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower">
                            <h4 class="text-white">Flower</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#hexagon-tab" data-bg="hexagon">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon">
                            <h4 class="text-white">Hexagon</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#line-tab" data-bg="line">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line">
                            <h4 class="text-white">Line</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#star-tab" data-bg="star">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/star.svg" alt="JoWood 3D podovi | Star">
                            <h4 class="text-white">Star</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-floors-trigger" data-target="#triangle-tab" data-bg="triangle">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Triangle">
                            <h4 class="text-white">Triangle</h4>
                        </button>
                    </div>
                </div>
                <div id="single-floor-section" class="row">
                    <div id="floor-sidebar" class="col-12 col-md-3">
                        <button class="small-floors-trigger" data-target="#cube-tab" data-bg="cube"><span>Cube</span> <?php createSvg('cube'); ?> </button>
                        <button class="small-floors-trigger" data-target="#flower-tab" data-bg="flower"><span>Flower</span> <?php createSvg('flower'); ?> </button>
                        <button class="small-floors-trigger" data-target="#hexagon-tab" data-bg="hexagon"><span>Hexagon</span> <?php createSvg('hexagon'); ?> </button>
                        <button class="small-floors-trigger" data-target="#line-tab" data-bg="line"><span>Line</span> <?php createSvg('line'); ?> </button>
                        <button class="small-floors-trigger" data-target="#star-tab" data-bg="star"><span>Star</span> <?php createSvg('star'); ?> </button>
                        <button class="small-floors-trigger" data-target="#triangle-tab" data-bg="triangle"><span>Triangle</span> <?php createSvg('triangle'); ?> </button>
                    </div>
                    <div id="dynamic-floors" class="col-12 col-md-9">
                        <div id="cube-tab" class="single-floor-tab">
                            <h2>Cube</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#cube" class="view-more-floors">Pogledajte više o Cube-u</a>
                        </div>
                        <div id="flower-tab" class="single-floor-tab">
                            <h2>Flower</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#flower" class="view-more-floors">Pogledajte više o Flower-u</a>
                        </div>
                        <div id="hexagon-tab" class="single-floor-tab">
                            <h2>Hexagon</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#hexagon" class="view-more-floors">Pogledajte više o Hexagon-u</a>
                        </div>
                        <div id="line-tab" class="single-floor-tab">
                            <h2>Line</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#line" class="view-more-floors">Pogledajte više o Line-u</a>
                        </div>
                        <div id="star-tab" class="single-floor-tab">
                            <h2>Star</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#star" class="view-more-floors">Pogledajte više o Star-u</a>
                        </div>
                        <div id="triangle-tab" class="single-floor-tab">
                            <h2>Triangle</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="products.php#triangle" class="view-more-floors">Pogledajte više o Triangle-u</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-partners">
    <div class="wrapper text-center">
        <h2>Saradnja</h2>
        <div class="row">
            <div class="offset-1 col-10 col-md-4 d-flex mb-4 mb-md-0">
                <div class="home-partners-card">
                    <span class="partners-img-holder">
                        <img src="assets/img/partners.jpg" alt="JoWood 3D Podovi | Partneri">
                    </span>
                    <div class="home-partners-text text-center">
                        <h4>Želite da sarađujemo?</h4>
                        <p>Za partnerske kompanije nudimo velike pogodnosti i benefite. U koliko imate predlog za saradnju, možete nam pisati na stranici na koju vas vodi link ispod.</p>
                        <a href="partners.php" class="partners-link">Partneri</a>
                    </div>
                </div>
            </div>
            <div class="offset-1 col-10 offset-md-2 col-md-4 d-flex">
                <div class="home-partners-card">
                    <span class="partners-img-holder">
                        <img src="assets/img/job.jpg" alt="JoWood 3D Podovi | Zaposlenje">
                    </span>
                    <div class="home-partners-text text-center">
                        <h4>Želite da se zaposlite kod nas?</h4>
                        <p>Ukoliko imate iskustva u obradi drveta ili u radu sa istim i želite posao u našoj kompaniji, na sledećem linku nam možete napisati par stvari o sebi ili dostaviti svoj CV.</p>
                        <a href="job.php" class="partners-link">Zaposlenje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('inc/body-after.php');
?>