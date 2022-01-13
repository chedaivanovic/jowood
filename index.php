<?php
$pageTitle = 'Početna strana';
$pageClass = 'home';
include('inc/body-before.php');
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
                    <a class="cta-btn cta-btn-primary" href="products.php">Pogledajte naše podove</a>
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

<section id="services">
    <div class="wrapper">
        <div id="services-main-box">
            <div class="services-header mb-4 w-100">
                <button class="all-services-trigger col-12 mb-3 services-trigger-active" data-target="#all-services-tab">
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#fff" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                        </svg>
                        Upoznajte naše 3D podove
                    </span>
                </button>
            </div>
            <div id="services-body" class="services-tab">
                <div id="all-services-tab" class="">
                    <div class="row py-4">
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#servis-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube">
                            <h4 class="text-white">Cube</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#punjenje-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower">
                            <h4 class="text-white">Flower</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#dijagnostika-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon">
                            <h4 class="text-white">Hexagon</h4>
                        </button>
                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#remont-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line">
                            <h4 class="text-white">Line</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#dezinfekcija-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/star.svg" alt="JoWood 3D podovi | Star">
                            <h4 class="text-white">Star</h4>
                        </button>

                        <button class="col-12 col-sm-6 col-md-4 btn mb-3 big-services-trigger" data-target="#delovi-tab">
                            <img loading="lazy" class="w-50 mb-4" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Triangle">
                            <h4 class="text-white">Triangle</h4>
                        </button>
                    </div>
                </div>
                <div id="single-service-section" class="row">
                    <div id="service-sidebar" class="col-12 col-md-3">
                        <button class="small-services-trigger" data-target="#servis-tab"><img loading="lazy" src="assets/img/icons/cube.svg" alt="JoWood 3D podovi | Cube"> <span>Cube</span></button>
                        <button class="small-services-trigger" data-target="#punjenje-tab"><img loading="lazy" src="assets/img/icons/flower.svg" alt="JoWood 3D podovi | Flower"> <span>Flower</span></button>
                        <button class="small-services-trigger" data-target="#dijagnostika-tab"><img loading="lazy" src="assets/img/icons/hexagon.svg" alt="JoWood 3D podovi | Hexagon"> <span>Hexagon</span></button>
                        <button class="small-services-trigger" data-target="#remont-tab"><img loading="lazy" src="assets/img/icons/line.svg" alt="JoWood 3D podovi | Line"> <span>Line</span></button>
                        <button class="small-services-trigger" data-target="#dezinfekcija-tab"><img loading="lazy" src="assets/img/icons/star.svg" alt="JoWood 3D podovi | Dezinfekcija sistema"> <span>Star</span></button>
                        <button class="small-services-trigger" data-target="#delovi-tab"><img loading="lazy" src="assets/img/icons/triangle.svg" alt="JoWood 3D podovi | Delovi za klime"> <span>Triangle</span></button>
                    </div>
                    <div id="dynamic-services" class="col-12 col-md-9">
                        <div id="servis-tab" class="single-service-tab">
                            <h2>Cube</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                        <div id="punjenje-tab" class="single-service-tab">
                            <h2>Flower</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                        <div id="dijagnostika-tab" class="single-service-tab">
                            <h2>Hexagon</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                        <div id="remont-tab" class="single-service-tab">
                            <h2>Line</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                        <div id="dezinfekcija-tab" class="single-service-tab">
                            <h2>Star</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                        <div id="delovi-tab" class="single-service-tab">
                            <h2>Triangle</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quam perferendis blanditiis voluptatibus. Eveniet inventore atque sit id ad expedita aspernatur? Modi facere doloribus architecto in id. Delectus quo voluptatibus, tempora consequatur vitae modi eveniet iure suscipit ex exercitationem similique, doloribus laboriosam rem distinctio maiores, ratione natus ab magni eum reiciendis dolor dolores! Pariatur maxime temporibus consequuntur dolorum corrupti, aliquam, eligendi unde non voluptatem aperiam architecto, modi iusto soluta quo. Mollitia inventore doloremque animi sint illum, maiores perferendis esse, tenetur commodi excepturi, voluptate ratione voluptatibus minima suscipit reiciendis? Sunt optio architecto earum dicta culpa sequi ratione libero velit magni exercitationem.</p>
                            <a href="" class="view-more">Pogledajte više...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('inc/body-after.php');
?>